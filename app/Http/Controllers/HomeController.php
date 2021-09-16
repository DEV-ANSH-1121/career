<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserCreateReqeust;
use App\Http\Requests\MailRequest;
use App\Http\Requests\MobileRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Mail\SendOTPAWSMail;
use App\Mail\SendPasswordMail;
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
        $data['password'] = substr($data['email'], 0, 4).substr($data['mobile'], 0, 4);
        if(strlen(str_replace(' ', '', $data['name'])) >= 4){
            $data['password'] .= substr(str_replace(' ', '', $data['name']), 0, 4);
        }else{
            $data['password'] .= substr($data['name'], 0, strlen(str_replace(' ', '', $data['name'])));
        }
        $data['loginIP'] = $request->ip();
        $data['edate'] = now();
        $data['passcode'] = Hash::make($data['password']);

        $mailOtp = \DB::table('otp_verifications')->where('email',$data['email'])->orWhere('mobile',$data['mobile'])->first();
        if (isset($mailOtp->email_verified) && !empty($mailOtp->email_verified)) {
            $data['vemail'] = $mailOtp->email_verified;
            \DB::table('otp_verifications')->where('email',$data['email'])->delete();
        }else{
            $data['vemail'] = 'N';
        }
        if (isset($mailOtp->mobile_verified) && !empty($mailOtp->mobile_verified)) {
            $data['vmobile'] = $mailOtp->mobile_verified;
            \DB::table('otp_verifications')->where('mobile',$data['mobile'])->delete();
        }else{
            $data['vmobile'] = 'N';
        }
        $data['name'] = strtoupper($data['name']);
        $user = User::create($data);
        Mail::to($data['email'])->send(new SendPasswordMail($data));
        \Session::flash('message', 'Registered Successfully. Please check your mail for password.');
        return redirect()->route('loginPage');
    }

    public function sendMailOtp(MailRequest $request)
    {
        $data = $request->validated();
        $data['otp'] = mt_rand(1000,9999);
        \DB::table('otp_verifications')->where('email',$data['email'])->delete();
        Mail::to($data['email'])->send(new SendOTPAWSMail($data));
        \DB::table('otp_verifications')->insert(['email'=>$data['email'],'email_otp'=>$data['otp']]);
        return['message' => 'Please check your mail for OTP'];
    }

    public function verifyMailOtp(Request $request)
    {
        $data = $request->all();
        $mailOtp = \DB::table('otp_verifications')->where('email',$data['email'])->value('email_otp');
        if (isset($mailOtp) && !empty($mailOtp) && $data['otp'] == $mailOtp) {
            \DB::table('otp_verifications')->where('email',$data['email'])->update(['email_verified' => 'Y']);
            return['message' => 'Mail Verified Successfully'];
        }else{
            return['message' => 'Incorrect OTP'];
        }
    }

    public function sendMobileOtp(MobileRequest $request)
    {
        $data = $request->validated();
        $data['otp'] = mt_rand(1000,9999);
        \DB::table('otp_verifications')->insert(['mobile'=>$data['mobile'],'mobile_otp'=>$data['otp']]);
        Mail::to($data['email'])->send(new SendOTPAWSMail($data));
        return['message' => 'Please check your message for OTP'];
    }

    public function verifyMobileOtp(Request $request)
    {
        $data = $request->all();
        $mailOtp = \DB::table('otp_verifications')->where('mobile',$data['mobile'])->value('mobile_otp');
        if (isset($mailOtp) && !empty($mailOtp) && $data['otp'] == $mailOtp) {
            \DB::table('otp_verifications')->where('mobile',$data['mobile'])->update(['mobile_verified' => 'N']);
            return['message' => 'Mobile Verified Successfully'];
        }else{
            return['message' => 'Incorrect OTP'];
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
}