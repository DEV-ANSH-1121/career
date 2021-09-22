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
use App\Models\HrResult;
use App\Models\UserVariable;
use App\Http\Requests\UpdateProfileRequest;

class UserController extends Controller
{
    public function dashboard()
    {
        $user = auth()->user();
        return view('pages.dashboard',['user' => $user]);
    }

    public function lead()
    {
        return view('pages.counsellor.lead');
    }

    public function hrm()
    {
        $data['userVariable'] = UserVariable::where('userID',auth()->user()->userID)->first();
        $data['skillResult'] = SkillResult::where('userID',auth()->user()->userID)->first();
        $data['hrResult'] = HrResult::where('userID',auth()->user()->userID)->first();
        $data['hrmList'] = [];
        if(isset($data['userVariable']->userID)){
            $data['hrmList'] = User::where('usertype','C')->take($data['userVariable']->limit_hrm)->get();
        }
        
        return view('pages.counsellor.hrm',['data' => $data]);
    }

    public function report()
    {
        return view('pages.counsellor.report');
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

    public function callLogs($id='')
    {
        if(!empty($id)){
            $data['student'] = User::where('userID',$id)->first();
        }
        return view('pages.counsellor.callReports',['data' =>$data]);
    }

    public function emailLogs($id='')
    {
        if(!empty($id)){
            $data['student'] = User::where('userID',$id)->first();
        }
        return view('pages.counsellor.emailLogs',['data' =>$data]);
    }

    public function smsLogs($id='')
    {
        if(!empty($id)){
            $data['student'] = User::where('userID',$id)->first();
        }
        return view('pages.counsellor.smsLogs',['data' =>$data]);
    }

    public function whatsappLogs($id='')
    {
        if(!empty($id)){
            $data['student'] = User::where('userID',$id)->first();
        }
        return view('pages.counsellor.whatsappLogs',['data' =>$data]);
    }

    public function visitLogs($id='')
    {
        if(!empty($id)){
            $data['student'] = User::where('userID',$id)->first();
        }
        return view('pages.counsellor.visitLogs',['data' =>$data]);
    }

    public function clientCallLogs($id='')
    {
        if(!empty($id)){
            $data['student'] = User::where('userID',$id)->first();
        }
        return view('pages.counsellor.clientCallReports',['data' =>$data]);
    }

    public function clientEmailLogs($id='')
    {
        if(!empty($id)){
            $data['student'] = User::where('userID',$id)->first();
        }
        return view('pages.counsellor.clientEmailLogs',['data' =>$data]);
    }

    public function clientSmsLogs($id='')
    {
        if(!empty($id)){
            $data['student'] = User::where('userID',$id)->first();
        }
        return view('pages.counsellor.clientSmsLogs',['data' =>$data]);
    }

    public function clientWhatsappLogs($id='')
    {
        if(!empty($id)){
            $data['student'] = User::where('userID',$id)->first();
        }
        return view('pages.counsellor.clientWhatsappLogs',['data' =>$data]);
    }

    public function clientVisitLogs($id='')
    {
        if(!empty($id)){
            $data['student'] = User::where('userID',$id)->first();
        }
        return view('pages.counsellor.clientVisitLogs',['data' =>$data]);
    }

    public function masterTable()
    {
        return view('pages.counsellor.masterTable');
    }
     public function studySchedule()
    {
        return view('pages.counsellor.studySchedule');
    }
     public function studyDashboard()
    {
        return view('pages.counsellor.studyDashboard');
    }
     public function studyTest()
    {
        return view('pages.counsellor.studyTest');
    }
     public function careerDashboard()
        {
            return view('pages.counsellor.careerDashboard');
        }


    public function skillTest(Request $request)
    {
        $data['skillResult'] = SkillResult::updateOrCreate(
            ['userID' => auth()->user()->userID, 'skillsID' => 2],
            ['loginIP' => $request->ip(), 'edate' => now()]
        );
        $data['skill'] = SkillEvaluator::where('skillsID',2)->select(['total_question','total_time'])->first();
        $data['skillTest'] = SkillTest::where('resultID',$data['skillResult']->resultID)->first();
        $data['preTest'] = [];
        $data['time_used'] = $data['skillResult']->time_sec;
        if(isset($data['skillTest']->resultID)){
            $data['skillTest'] = SkillTest::where('resultID',$data['skillResult']->resultID)->select(['answer','mcqID','mcq_order','testime'])->get()->toArray();
            foreach($data['skillTest'] as $key => $value){
                $data['preTest'][$value['mcqID']] = $value['answer'];
            }
            $quesID = array_keys($data['preTest']);
            $ques_order = implode(',', $quesID);
            $data['questions'] = SkillMcq::whereIn('mcqID', $quesID)
                ->select(['mcqID','question','option1','option2','option3','option4'])
                ->orderByRaw("FIELD(mcqID, $ques_order)")
                ->get();
        }else{
            $data['questions'] = SkillMcq::where('skillsID',2)->select(['mcqID','question','option1','option2','option3','option4'])->take($data['skill']->total_question)->inRandomOrder()->get();
            foreach($data['questions'] as $key => $question){
                SkillTest::insert([
                    'resultID' => $data['skillResult']->resultID,
                    'mcq_order' => $key + 1,
                    'mcqID' => $question->mcqID,
                    'testime' => 0
                ]);
            }
        }
            
        return view('pages.counsellor.skillTest',['data' => $data]);
    }

    public function submitSingleAnswer(Request $request)
    {
        $resultID = SkillResult::where('userID',auth()->user()->userID)->first();
        $skillTest = SkillTest::where('resultID',$resultID->resultID)->where('mcqID',$request->mcqID)->update(['answer' => $request->answer,'testime' =>$request->testime]);
    }

    public function finalSubmit(Request $request)
    {
        //print_r($request->all());
        $data['time_sec'] = $request->time;
        if($request->finished == 'Y'){
            $data['finished'] = 'Y';
        }else{
            $data['finished'] = 'N';
        }
        $data['time_sec'] = $request->time;
        $resultID = SkillResult::where('userID',auth()->user()->userID)->update($data);
        return ['status' => true];
    }

    public function skillResult()
    {
        $data['skillEvaluator'] = SkillEvaluator::where('skillsID',2)->select(['marks_correct','marks_wrong','marks_total','total_question'])->first();
        $data['skillResult'] = SkillResult::where(['userID' => auth()->user()->userID, 'skillsID' => 2])->first();
        $data['skillTest'] = SkillTest::where('resultID',$data['skillResult']->resultID)->pluck('answer','mcqID')->toArray();
        $data['answersheet'] = SkillTest::where('resultID',$data['skillResult']->resultID)->get()->toArray();
        $quesID = array_keys($data['skillTest']);
        $ques_order = implode(',', $quesID);
        $data['skillMcq'] = SkillMcq::whereIn('mcqID', $quesID)
                ->orderByRaw("FIELD(mcqID, $ques_order)")
                ->pluck('correct','mcqID')
                ->toArray();
        
        $data['attemted'] = 0;
        $data['correct'] = 0;
        $data['inCorrect'] = 0;
        $data['notAttempt'] = 0;
        $i = 0;
        foreach($data['skillTest'] as $key => $value){
            if ($value == $data['skillMcq'][$key]) {
                $data['correct'] += 1;
                $data['answersheet'][$i]['answer'] = 'Y';
                $data['attemted'] = $data['attemted'] + 1;
            }elseif(!empty($value) || !is_null($value)){
                $data['inCorrect'] += 1;
                $data['answersheet'][$i]['answer'] = 'N';
                $data['attemted'] = $data['attemted'] + 1;
            }else{
                $data['notAttempt'] += 1;
                $data['answersheet'][$i]['answer'] = 'U';
            }
            $i++;
        }
        //print_r($data['answersheet']);die;
        $data['correctMarks'] = $data['correct'] * $data['skillEvaluator']->marks_correct;
        $data['inCorrectMarks'] = $data['inCorrect'] * $data['skillEvaluator']->marks_wrong;
        $data['marks_obtained'] = $data['correctMarks'] - $data['inCorrectMarks'];
        $data['percentage'] = ($data['marks_obtained'] * 100) / $data['skillEvaluator']->marks_total;
        SkillResult::where('userID',auth()->user()->userID)->update([
            'ques_attempted' => $data['attemted'],
            'correct_ans' => $data['correct'],
            'marks' => $data['marks_obtained'],
            'finished' => 'Y'
        ]);
        return view('pages.counsellor.skillResult',['data' => $data]);
    }

    public function hrInterview()
    {
        return view('pages.counsellor.hrInterview');
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
