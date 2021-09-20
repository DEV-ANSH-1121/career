<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserCreateReqeust;
use App\Http\Requests\MailRequest;
use App\Http\Requests\MobileRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\ForgetPasswordRequest;
use App\Http\Requests\ResetPasswordRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Mail\SendOTPAWSMail;
use App\Mail\SendPasswordMail;
use App\Mail\ForgetPasswordOtp;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function loginPage()
    {
        return view('pages.login');
    }

    public function register(UserCreateReqeust $request)
    {
        $data = $request->validated();

        $mailOtp = \DB::table('otp_verifications')->where('userid',$data['email'])->first();
        $mobileOtp = \DB::table('otp_verifications')->where('userid',$data['mobile'])->first();
        if (isset($mailOtp->verified) && $mailOtp->verified == 'Y') {
            $data['vemail'] = $mailOtp->verified;
        }else{
            \Session::flash('vemailmsg', 'Please verify your email');
            return redirect()->back()->withInput();
        }
        if (isset($mobileOtp->verified) && $mobileOtp->verified == 'Y') {
            $data['vmobile'] = $mobileOtp->verified;
        }else{
            \Session::flash('vmobilemsg', 'Please verify your mobile');
            return redirect()->back()->withInput();
        }

        $data['password'] = substr($data['email'], 0, 4).substr($data['mobile'], 0, 4);
        $data['name'] = strtolower($data['name']);
        if(strlen(str_replace(' ', '', $data['name'])) >= 4){
            $data['password'] .= substr(str_replace(' ', '', $data['name']), 0, 4);
        }else{
            $data['password'] .= substr($data['name'], 0, strlen(str_replace(' ', '', $data['name'])));
        }
        $data['loginIP'] = $request->ip();
        $data['edate'] = now();
        $data['passcode'] = bcrypt($data['password']);

        
        $data['name'] = strtoupper($data['name']);
        $user = User::create($data);
        \DB::table('otp_verifications')->where('userid',$data['mobile'])->orWhere('userid',$data['email'])->where('otp_for','register')->delete();
        Mail::to($data['email'])->send(new SendPasswordMail($data));
        \Session::flash('message', 'Registered Successfully. Please check your mail for password.');
        return redirect()->route('loginPage');
    }

    public function sendMailOtp(MailRequest $request)
    {
        $data = $request->validated();
        $data['otp'] = mt_rand(1000,9999);
        \DB::table('otp_verifications')->where('userid',$data['email'])->delete();
        Mail::to($data['email'])->send(new SendOTPAWSMail($data));
        \DB::table('otp_verifications')->insert(['userid'=>$data['email'],'otp'=>$data['otp'],'otp_for'=>'register']);
        return['message' => 'Please check your mail for OTP','color' => 'green'];
    }

    public function verifyMailOtp(Request $request)
    {
        $data = $request->all();
        $mailOtp = \DB::table('otp_verifications')->where('userid',$data['email'])->where('otp_for','register')->value('otp');
        if (isset($mailOtp) && !empty($mailOtp) && $data['otp'] == $mailOtp) {
            \DB::table('otp_verifications')->where('userid',$data['email'])->update(['verified' => 'Y']);
            return['message' => 'Mail Verified Successfully','color' => 'green'];
        }else{
            return['message' => 'Incorrect OTP','color' => 'red'];
        }
    }

    public function sendMobileOtp(MobileRequest $request)
    {
        $data = $request->validated();
        $data['for'] = 'register';
        return $this->sendSmsOtp($data);
    }

    public function verifyMobileOtp(Request $request)
    {
        $data = $request->all();
        $mailOtp = \DB::table('otp_verifications')->where('userid',$data['mobile'])->where('otp_for','register')->value('otp');
        if (isset($mailOtp) && !empty($mailOtp) && $data['otp'] == $mailOtp) {
            \DB::table('otp_verifications')->where('userid',$data['mobile'])->update(['verified' => 'Y']);
            return['message' => 'Mobile Verified Successfully','color' => 'green'];
        }else{
            return['message' => 'Incorrect OTP','color' => 'red'];
        }
    }

    public function login(LoginRequest $request)
    {
        if (\Auth::attempt(['email' => $request->loginemail,'password' => $request->password])) {
            return redirect()->route('user.dashboard');
        }else{
            \Session::flash('loginError', 'Your password is incorrect');
            return redirect()->route('loginPage');
        }
    }

    public function getOtpForgetPwd(ForgetPasswordRequest $request)
    {
        $data = $request->validated();
        $user = User::where('email',$data['userid'])->orWhere('mobile',$data['userid'])->first();
        if (!is_null($user)) {
            $data['email'] = $user->email;
            $data['mobile'] = $user->mobile;
            $data['password'] = substr($user->email, 0, 4).substr($user->mobile, 0, 4);
            $user->name = strtolower($user->name);
            if(strlen(str_replace(' ', '', $user->name)) >= 4){
                $data['password'] .= substr(str_replace(' ', '', $user->name), 0, 4);
            }else{
                $data['password'] .= substr($user->name, 0, strlen(str_replace(' ', '', $user->name)));
            }
            if ($user->email == $data['userid']) {
                Mail::to($data['email'])->send(new SendPasswordMail($data));
                return['status' => true,'message' => 'Password sent. Please check your mail', 'color' => 'green'];
            }elseif ($user->mobile == $data['userid']) {
                $data['mobile'] = $user->mobile;
                $aws = \DB::table('mast_authentic')->where('provider','aws_sns')->first();
                $params = array(
                    'credentials' => array(
                        'key' => $aws->user,
                        'secret' => $aws->password,
                    ),
                    'region' => 'ap-south-1', // < your aws from SNS Topic region
                    'version' => 'latest'
                );
                $sns = new \Aws\Sns\SnsClient($params);
                $args = array(
                    "MessageAttributes" => [
                        'AWS.SNS.SMS.SMSType' => [
                            'DataType' => 'String',
                            'StringValue' => 'Transactional'
                        ]
                    ],
                    "Message" => 'Your password is '.$data['password'],
                    "PhoneNumber" => "+91".$data['mobile']   // Provide phone number with country code
                );
                $sns->publish($args);
                return['status' => true,'message' => 'Password sent. Please check your phone', 'color' => 'green'];
            }else{
                return['status' => false,'message' => 'Record does not exist', 'color' => 'red'];
            }
        }else{
            return['status' => false,'message' => 'Record does not exist', 'color' => 'red'];
        }
    }

    public function resetPassword(ResetPasswordRequest $request)
    {
        $data =$request->validated();
        $otp = \DB::table('otp_verifications')->where('userid',$data['userid'])->where('otp_for','resetpwd')->where('otp',$data['fpwdotp'])->first();
        //print_r($otp);die;
        if (isset($otp->otp) && !empty($otp->otp)) {
            User::where('email',$data['userid'])->orWhere('mobile',$data['userid'])->update(['passcode' => bcrypt($data['reset_password'])]);
            $otp = \DB::table('otp_verifications')->where('userid',$data['userid'])->where('otp_for','resetpwd')->where('otp',$data['fpwdotp'])->delete();
            return['status' => true,'message' => 'Password Reset Successfully', 'color' => 'green'];
        }else{
            return['status' => false,'message' => 'Invalid OTP', 'color' => 'red'];
        }
    }

    public function sendSmsOtp($data=[])
    {
        $data['otp'] = mt_rand(1000,9999);
        $aws = \DB::table('mast_authentic')->where('provider','aws_sns')->first();
        $params = array(
            'credentials' => array(
                'key' => $aws->user,
                'secret' => $aws->password,
            ),
            'region' => 'ap-south-1', // < your aws from SNS Topic region
            'version' => 'latest'
        );
        $sns = new \Aws\Sns\SnsClient($params);
        $args = array(
            "MessageAttributes" => [
                'AWS.SNS.SMS.SMSType' => [
                    'DataType' => 'String',
                    'StringValue' => 'Transactional'
                ]
            ],
            "Message" => 'Your OTP is '.$data['otp'],
            "PhoneNumber" => "+91".$data['mobile']   // Provide phone number with country code
        );
        if($sns->publish($args)){
            \DB::table('otp_verifications')->where('userid',$data['mobile'])->where('otp_for',$data['for'])->delete();
            \DB::table('otp_verifications')->insert(['userid'=>$data['mobile'],'otp'=>$data['otp'],'otp_for'=>$data['for']]);
            return['message' => 'Please check your message for OTP','color' => 'green'];
        }else{
            return['message' => 'Something went wrong! Please try after sometime','color' => 'red'];
        }
    }
}