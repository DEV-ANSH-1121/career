<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
use App\Models\State;
use App\Models\District;
use App\Models\Pincode;
use App\Models\SkillEvaluator;
use App\Models\SkillMcq;
use App\Models\SkillResult;
use App\Models\SkillTest;
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

    public function skillTest(Request $request)
    {
        $data['skillResult'] = SkillResult::updateOrCreate(
            ['userID' => auth()->user()->userID, 'skillsID' => 2],
            ['loginIP' => $request->ip(), 'edate' => now()]
        );
        $data['skill'] = SkillEvaluator::where('skillsID',2)->select(['total_question','total_time'])->first();
        $data['skillTest'] = SkillTest::where('resultID',$data['skillResult']->resultID)->select(['answer','mcqID','mcq_order','testime'])->get()->toArray();
        $data['preTest'] = [];
        $data['time_used'] = $data['skillResult']->time_sec;
        if(!empty($data['skillTest'])){
            foreach($data['skillTest'] as $key => $value){
                $data['preTest'][$value['mcqID']] = $value['answer'];
                $data['time_used'] += $value['testime'];
            }
            $quesID = array_keys($data['preTest']);
            $ques_order = implode(',', $quesID);
            $data['questions'] = SkillMcq::whereIn('mcqID', $quesID)
                ->select(['mcqID','question','option1','option2','option3','option4'])
                ->orderByRaw("FIELD(mcqID, $ques_order)")
                ->get();
        }else{
            $data['questions'] = SkillMcq::where('skillsID',2)->select(['mcqID','question','option1','option2','option3','option4'])->take($data['skill']->total_question)->inRandomOrder()->orderBy()->get();
            foreach($data['questions'] as $key => $question){
                SkillTest::insert([
                    'resultID' => $data['skillResult']->resultID,
                    'mcq_order' => $key + 1,
                    'mcqID' => $question->mcqID,
                    'testime' => 0
                ]);
            }
        }
            
        return view('pages.admin.skillTest',['data' => $data]);
    }

    public function submitSingleAnswer(Request $request)
    {
        $resultID = SkillResult::where('userID',auth()->user()->userID)->first();
        $skillTest = SkillTest::where('resultID',$resultID->resultID)->where('mcqID',$request->mcqID)->update(['answer' => $request->answer,'testime' =>$request->testime]);
    }

    public function finalSubmit(Request $request)
    {
        $resultID = SkillResult::where('userID',auth()->user()->userID)->update(['finished' => $request->finished,'time_sec' => $request->time]);
    }

    public function skillResult()
    {
        return view('pages.admin.skillResult');
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
