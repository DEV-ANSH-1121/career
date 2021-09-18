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
        if(empty($user->country) || empty($user->state) || empty($user->district) || empty($user->pincode) || empty($user->gender) || empty($user->dob) || empty($user->pic)){
            return redirect()->route('user.getProfile');
        }
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
        if (isset($data['dob'])) {
            $data['dob'] = date_create($data['dob']);
            $data['dob'] =  date_format($data['dob'],"Y-m-d");
        }
        if(isset($data['pic'])){
            $file = $data['pic']->store(auth()->user()->userID, ['disk' => 'pic']);
            $path = 'storage/' . $file;
            $data['pic'] = $path;
        }
        if(isset($data['resume'])){
            $file = $data['resume']->store(auth()->user()->userID, ['disk' => 'resume']);
            $path = 'storage/' . $file;
            $data['resume'] = $path;
        }
        User::where('userID',auth()->user()->userID)->update($data);
        return redirect()->route('user.dashboard');
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
