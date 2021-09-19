<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
use App\Models\State;
use App\Models\District;
use App\Models\Pincode;
use App\Http\Requests\UpdateProfileRequest;

class UserController extends Controller
{
    public function dashboard()
    {
        $user = auth()->user();
        return view('pages.dashboard',['user' => $user]);
    }

    public function getProfile()
    {
        $user = auth()->user();
        $countries = Country::all();
        $states = State::all();
        $districts = District::all();
        //$pincodes = Pincode::all();
        return view('pages.updateProfile',['user' => $user,'countries' =>$countries,'states' =>$states,'districts' =>$districts]);
    }

    public function storeProfile(UpdateProfileRequest $request)
    {
        $data = $request->validated();
        $user = User::find(auth()->user()->userID);
        if (isset($data['dob'])) {
            $data['dob'] = date_create($data['dob']);
            $data['dob'] =  date_format($data['dob'],"Y-m-d");
        }
        $dir = mt_rand(10,99).auth()->user()->userID.mt_rand(10,99);
        if(isset($data['pic'])){
            $extension = $request->file('pic')->extension();
            $file = $data['pic']->storeAs($dir,'profilepicture'.'.'.$extension, ['disk' => 'public']);
            $path = 'storage/' . $file;
            $data['pic'] = $path;
            if (isset($user->pic) && !empty($user->pic)) {
                \File::delete($user->pic);
            }
        }
        if(isset($data['resume'])){
            $file = $data['resume']->storeAs($dir,'resume'.'.'.$extension, ['disk' => 'public']);
            $path = 'storage/' . $file;
            $data['resume'] = $path;
            if (isset($user->resume) && !empty($user->resume)) {
                \File::delete($user->resume);
            }
        }
        User::where('userID',auth()->user()->userID)->update($data);
        return redirect()->route('user.dashboard');
    }

    public function callLogs()
    {
        return view('pages.admin.callReports');
    }

    public function skillTest()
    {
        return view('pages.admin.skillTest');
    }

    public function hrInterview()
    {
        return view('pages.admin.hrInterview');
    }




    public function pinTableUpdate()
    {
        //$districts = District::all();
        foreach ($districts as $key => $district) {
            $pin = Pincode::where('district', 'like', '%'.$district->district.'%')->update([
                'country' => $district->countryID,
                'state' => $district->stateID,
                'district' => $district->districtID,
            ]);
        }
    }
}
