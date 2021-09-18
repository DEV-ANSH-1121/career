@extends('includes.prelogin.main')
@section('content')
<!---------------FORGOT PASSWORD---------->
<div class="modal fade" id="forgotpassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><img class="icon2" src="images/icon.png">Forgot Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="forgetPassForm" method="post" action="{{url('/getOtpForgetPwd')}}">
                    
                    <div class="fpwdmsg userid_error" style="color:red"></div>
                    <div class="my-auto">
                        <div class="form-group field">
                            <input type="text" class="form-control" id="userid" aria-describedby="emailHelp" placeholder="Enter email / Mobile" name="userid" value="">
                        </div>
                        <div class="preotphidden" style="display:none;">
                        <div class="form-group field">
                            <input type="text" name="fpwdotp" id="fpwdotp" class="form-control fpwdotp" placeholder="Enter OTP here" value="">
                        </div>
                        <div class="form-group field fpwdotp_error" style="color: red;"></div>
                        <div class="form-group mt-3 field">
                            <input type="password" name="reset_password" id="reset_password" class="form-control" placeholder="Enter New Passsword">
                        </div>
                        <div class="form-group field reset_password_error" style="color: red;"></div>
                        <div class="form-group mt-3 field">
                            <input type="password" name="reset_password_confirmation" id="reset_password_confirmation" class="form-control" placeholder="Re-Enter New Passsword">
                        </div>
                        <div class="form-group field reset_password_confirmation_error" style="color: red;"></div>
                        </div>
                        <br>
                        <button class="Verify fpwdbtn">Get OTP</button>
                    </div>
                </form>
                <form class="resetPassForm" method="post" action="{{url('/resetPassword')}}" style="display: none;">
                    
                </form>
            </div>
        </div>
    </div>
</div>
<!---------------FORGOT PASSWORD END---------->

<div class="section_login">
    <div class="admin_">
        <div class="container-fluid max-width1200px">
            <div class="row justify-content-center">
            	<div class=" col-12">
	            	@if(Session::has('message'))
						<p class="alert alert-success">{{ Session::get('message') }}</p>
					@endif
				</div>
                <div class=" col-md-12 col-lg-3">
                    <h1 class="login-title font-weight-bold text-center mb-3"><img class="icon2" src="images/icon.png">Sign In</h1>
                    <form method="post" action="{{route('login')}}" id="loginForm">
                        {{csrf_field()}}
                        <div class="my-auto">
                            <div class="form-group field">
                                <span><i class="fa fa-envelope"></i></span><input type="text" name="loginemail" id="loginemail" class="form-control" placeholder="Email" value="{{old('loginemail')}}">
                                <div id="loginemailerror"></div>
                            </div>
                            @error('loginemail')
                                <div class="form-group field" style="color: red;">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="form-group mt-3 field">
                                <span><i class="fa fa-unlock-alt"></i></span><input type="password" name="password" id="password" class="form-control" placeholder="Passsword"><br>
                                <div id="passworderror"></div>
                            </div>
                            @error('password')
                                <div class="form-group field" style="color: red;">
                                    {{ $message }}
                                </div>
                            @enderror
                            @if(Session::has('loginError'))
                                <div class="form-group field alert alert-danger">
                                    {{ Session::get('loginError') }}
                                </div>
                            @endif
                            <div class="captcha-box row">
                                <div class="col-6">
                                    <canvas id="canvas"></canvas>
                                </div>
                                <div class="6">
                                    <i class="fa fa-refresh cursor-pointer refresh-captcha"></i>
                                </div>
                            </div>
                            <div class="form-group mt-3 field">
                                <input id="captchacode" class="form-control" placeholder="Enter the captcha code" autocomplete="off" maxlength="4">
                            </div>
                            <div class="form-group captcha-error"></div>
                            <div id="loginerror"></div>
                            <div id="loginmeserror"></div>
                            <br>
                            <button class="Verify login-button">Login</button>&nbsp;&nbsp;&nbsp;
                            <a href="#" class="forgot-password-link" data-toggle="modal" data-target="#forgotpassword">Forgot password?</a>
                        </div>
                    </form>
                </div>
                <div class="col-sm-1 ">
                    <div class="line">
                    </div>
                </div>
                <div class="col-md-12 col-lg-7">
                    <h1 class="login-title mar_left font-weight-bold text-center "><img class="icon2" src="images/icon.png">Sign Up</h1>
                    <form method="post" action="{{route('registerUser')}}" id="signupform">
                        {{csrf_field()}}
                        <div class="row ">
                            <div class="col-sm-12 col-md-5 p-2  field">
                                <span><i class="fa fa-envelope"></i></span><input type="email" class=" input-text form-control" name="email" id="email" placeholder="Email" value="{{old('email')}}" required=""><a class="send sendemailotp cursor-pointer" style="color : #fff">Send</a>
                            </div>
                            <div class="col-sm-12 col-md-3 p-2">
                                <div class="otp inputs">
                                    <input type="text" name="n1" value="{{old('n1')}}" id="n1" class="otp-enter active input-text form-control" max="9999"  maxlength="1"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                                    <input type="text" name="n2" value="{{old('n2')}}" id="n2" class="otp-enter input-text form-control" maxlength="1"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                                    <input type="text" name="n3" value="{{old('n3')}}" id="n3" class="otp-enter input-text form-control" maxlength="1"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                                    <input type="text" name="n4" value="{{old('n4')}}" id="n4" class="otp-enter input-text form-control" max="9999"  maxlength="1"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 p-2">
                                <div class="otp">
                                    <a class="Verify Verify_ verifyemailotp cursor-pointer" style="color : #fff">Verify</a>
                                </div>
                            </div>
                            <div class="col-8 email-msg" style="color:red"></div>
                            @error('email')
							    <div class="col-8" style="color: red">{{ $message }}</div>
							@enderror
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5 p-2 field">
                                <span><i class="fa fa-phone-square"></i></span><input type="text" class=" input-text form-control" placeholder="Mobile" name="mobile" id="mobile" autocomplete="off" pattern="^[0-9]{10}$" maxlength="10" value="{{old('mobile')}}" required=""><a class="send sendmobileotp cursor-pointer" style="color : #fff">Send</a>
                            </div>
                            <div class="col-sm-12 col-md-3 p-2">
                                <div class="otp input_">
                                    <input type="text" name="n5" value="{{old('n5')}}" id="n5" class="otp-enter active input-text form-control" max="9999"  maxlength="1"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                                    <input type="text" name="n6" value="{{old('n6')}}" id="n6" class="otp-enter input-text form-control" maxlength="1"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                                    <input type="text" name="n7" value="{{old('n7')}}" id="n7" class="otp-enter input-text form-control" maxlength="1"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                                    <input type="text" name="n8" value="{{old('n8')}}" id="n8" class="otp-enter input-text form-control" max="9999"  maxlength="1"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 p-2">
                                <div class="otp">
                                    <a class="Verify Verify_ verifymobileotp cursor-pointer" style="color : #fff">Verify</a>
                                </div>
                            </div>
                            <div class="col-8 mobile-msg" style="color:red"></div>
                            @error('mobile')
							    <div class="col-8" style="color: red">{{ $message }}</div>
							@enderror
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5 p-2 field">
                                <span><i class="fa fa-user"></i></span><input type="text" class=" input-text form-control" name="name" id="name" placeholder="Full Name" value="{{old('name')}}" required="">
                            </div>
                            <div class="col-sm-12 col-md-5 mt-1px">
                                <select class="form-control" name="usertype" id="usertype" required="">
                                    <option >User Type</option>
                                    <option value="S" @if(old('usertype') == 'S') selected=""  @endif>Student</option>
                                    <option value="C" @if(old('usertype') == 'C') selected=""  @endif>Counsellor</option>
                                    <option value="J" @if(old('usertype') == 'J') selected=""  @endif>Jobseeker</option>
                                </select>
                            </div>
                            <div class="col-sm-12 col-md-2">
                            </div>
                            <div class="col-sm-5" style="color: red">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                            <div class="col-sm-5" style="color: red">
                                @error('usertype')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="row" style="position:relative;">
                            <div class="col-sm-12  p_">
                                <span class="i_agree"><span><input type="checkbox" id="agree" name="agree" @if(old('agree')) checked @endif required=""></span>I agree to terms of service and privacy policy. ||</span>
                                <span class="passsword_sent">The Password will be sent to your email.</span>
                            </div>
                        </div>
                        <div class="row">
                        </div>
                        <div class="row">
                            <div class="col-sm-12 pd_">
                                <button type="button " class="register_now">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
    function onSubmit(token) {
      document.getElementById("demo-form").submit();
    }
</script>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
    
    
    function OTPInput() {
      
    const inputs = document.querySelectorAll('.inputs input');
    for (let i = 0; i < inputs.length; i++) { 
    inputs[i].addEventListener('keydown', function(event) { 
      if (event.key==="Backspace" ) {
       inputs[i].value='' ; 
       if (i !==0) inputs[i - 1].focus(); 
      } else { 
        if (i===inputs.length - 1 && inputs[i].value !=='' ) {
         return true;
          } else if (event.keyCode >= 96 && event.keyCode <= 105) { 
            inputs[i].value=event.key;
             if (i !==inputs.length - 1) inputs[i + 1].focus();
              event.preventDefault(); 
            } else if (event.keyCode >= 48 && event.keyCode <= 57) {
             inputs[i].value=String.fromCharCode(event.keyCode); 
             if (i !==inputs.length - 1) inputs[i + 1].focus();
              event.preventDefault();
              } 
            } 
          });
           }
            } 
            function OTPInputs() {
      
    const inputs = document.querySelectorAll('.input_ input');
    for (let i = 0; i < inputs.length; i++) { 
    inputs[i].addEventListener('keydown', function(event) { 
      if (event.key==="Backspace" ) {
       inputs[i].value='' ; 
       if (i !==0) inputs[i - 1].focus(); 
      } else { 
        if (i===inputs.length - 1 && inputs[i].value !=='' ) {
         return true;
          } else if (event.keyCode >= 96 && event.keyCode <= 105) { 
            inputs[i].value=event.key;
             if (i !==inputs.length - 1) inputs[i + 1].focus();
              event.preventDefault(); 
            } else if (event.keyCode >= 48 && event.keyCode <= 57) {
             inputs[i].value=String.fromCharCode(event.keyCode); 
             if (i !==inputs.length - 1) inputs[i + 1].focus();
              event.preventDefault();
              } 
            } 
          });
           }
            }
            OTPInputs(); 
            OTPInput();
        });
</script>
<script type="text/javascript">
	jQuery(document).ready(function(){

        $(".fpwdbtn").click(function(e){
            e.preventDefault();
            $('.userid_error').html('');
            $('.fpwdotp_error').html('');
            $('.reset_password_error').html('');
            $('.reset_password_confirmation_error').html('');
            jQuery.ajax({
                url : jQuery('.forgetPassForm').attr('action'),
                method : jQuery('.forgetPassForm').attr('method'),
                data : {
                    'userid' : jQuery('#userid').val(),
                    'fpwdotp' : jQuery('#fpwdotp').val(),
                    'reset_password' : jQuery('#reset_password').val(),
                    'reset_password_confirmation' : jQuery('#reset_password_confirmation').val(),
                },
                success : function(response){
                    if(response.status){
                        jQuery('.forgetPassForm').attr('action',jQuery('#baseurl').val()+'/resetPassword');
                        jQuery('.preotphidden').css('display','block');
                        jQuery('.fpwdbtn').addClass('reset-password-button').html('Reset Password');
                        jQuery('#userid').attr('disabled',true);
                        jQuery('.fpwdmsg').css('color',response.color).html(response.message);
                    }else{
                        jQuery('.fpwdmsg').css('color',response.color).html(response.message);
                    }
                },
                error: function (reject) {
                    if( reject.status === 422 ) {
                        var errors = $.parseJSON(reject.responseText);console.log(errors.errors)
                        $.each(errors.errors, function (key, val) {
                            $("." + key + "_error").html(val[0]);
                        });
                    }
                }
            });
            //return false;
        });

        $('.login-button').click(function(e){
            e.preventDefault();
            const ans = captcha.valid($('#captchacode').val());
            if(!ans){
                $('.login-button').prop("disabled", true);
                $('.captcha-error').html("<span style='color:red'>Please enter Captcha</span>");
                captcha.refresh();
            }else{
                $('#loginForm').submit();
            }
        });
        // step-1
        var captchaLen = 4;
        const captcha = new Captcha($('#canvas'),{
            length: captchaLen
        });
          // api
          //captcha.refresh();
          //captcha.getCode();
          //captcha.valid("");
        $('.refresh-captcha').click(function(){
            captcha.refresh();
        });
        $('#captchacode').on('keyup', function() {
            var cinput = $(this);
            if(cinput.val().length == captchaLen){
                const ans = captcha.valid(cinput.val());
                if(ans){
                    $('.login-button').prop("disabled", false);
                    $('.captcha-error').html("<span style='color:green'>Captcha Verified Successfully</span>");
                }else{
                    $('.login-button').prop("disabled", true);
                    $('.captcha-error').html("<span style='color:red'>Invalid Captcha</span>");
                    captcha.refresh();
                }
            }
            
        });

		jQuery('.sendemailotp').click(function(){
			jQuery.ajax({
				url : jQuery('#baseurl').val()+'/sendMailOtp',
				method : 'post',
				data : {
					'email' : jQuery('#email').val()
				},
				success : function(response){
					jQuery('.email-msg').html(response.message);
				}
			});
		});

		jQuery('.verifyemailotp').click(function(){
			var otp = jQuery('#n1').val()+jQuery('#n2').val()+jQuery('#n3').val()+jQuery('#n4').val();
			jQuery.ajax({
				url : jQuery('#baseurl').val()+'/verifyMailOtp',
				method : 'post',
				data : {
					'email' : jQuery('#email').val(),
					'otp' : otp
				},
				success : function(response){
					jQuery('.email-msg').html(response.message);
				}
			});
		});

		jQuery('.sendmobileotp').click(function(){
			jQuery.ajax({
				url : jQuery('#baseurl').val()+'/sendMobileOtp',
				method : 'post',
				data : {
					'mobile' : jQuery('#mobile').val()
				},
				success : function(response){
					jQuery('.mobile-msg').html(response.message);
				}
			});
		});

		jQuery('.verifymobileotp').click(function(){
			var otp = jQuery('#n5').val()+jQuery('#n6').val()+jQuery('#n7').val()+jQuery('#n8').val();
			jQuery.ajax({
				url : jQuery('#baseurl').val()+'/verifyMobileOtp',
				method : 'post',
				data : {
					'mobile' : jQuery('#mobile').val(),
					'otp' : otp
				},
				success : function(response){
					jQuery('.mobile-msg').html(response.message);
				}
			});
		});
	});
</script>
@endsection