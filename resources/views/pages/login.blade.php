@extends('includes.main')
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
                <form class="myForm">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email / Mobile">
                    <button type="button" class="Verify">Submit</button>
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
                    <form >
                        <div class="my-auto">
                            <div class="form-group field">
                                <span><i class="fa fa-envelope"></i></span><input type="text" name="loginemail" id="loginemail" class="form-control" placeholder="Email">
                                <div id="loginemailerror"></div>
                            </div>
                            <div class="form-group mt-3 field">
                                <span><i class="fa fa-unlock-alt"></i></span><input type="password" name="password" id="password" class="form-control" placeholder="Passsword">
                                <div id="passworderror"></div>
                            </div>
                            <div id="loginerror"></div>
                            <div id="loginmeserror"></div>
                            <div id="example1">
                                <div style="width: 304px; height: 78px;">
                                    <div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=2&amp;k=6LdMHEMbAAAAAGVfxPf1WvX3Bu5qy1CfhAmxQVdo&amp;co=aHR0cHM6Ly9uaWNlZHUub3JnOjQ0Mw..&amp;hl=en-GB&amp;v=Eyd0Dt8h04h7r-D86uAD1JP-&amp;theme=light&amp;size=normal&amp;cb=yrbmv8wx3h3f" width="304" height="78" role="presentation" name="a-343ze5its3tv" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div>
                                    <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                </div>
                                <iframe style="display: none;"></iframe>
                            </div>
                            <br>
                            <button class="Verify">Login</button>&nbsp;&nbsp;&nbsp;
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
                    <form method="post" action="{{route('registerUser')}}">
                        {{csrf_field()}}
                        <div class="row ">
                            <div class="col-sm-12 col-md-5 p-2  field">
                                <span><i class="fa fa-envelope"></i></span><input type="email" class=" input-text form-control" name="email" id="email" placeholder="Email" required=""><a class="send sendemailotp cursor-pointer">Send</a>
                            </div>
                            <div class="col-sm-12 col-md-3 p-2">
                                <div class="otp inputs">
                                    <input type="text" name="n1" id="n1" class="otp-enter active input-text form-control" max="9999"  maxlength="1"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                                    <input type="text" name="n2" id="n2" class="otp-enter input-text form-control" maxlength="1"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                                    <input type="text" name="n3" id="n3" class="otp-enter input-text form-control" maxlength="1"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                                    <input type="text" name="n4" id="n4" class="otp-enter input-text form-control" max="9999"  maxlength="1"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 p-2">
                                <div class="otp">
                                    <a class="Verify Verify_ verifyemailotp cursor-pointer">Verify</a>
                                </div>
                            </div>
                            <div class="col-12 email-msg" style="color:red"></div>
                            @error('email')
							    <div class="col-12 alert alert-danger">{{ $message }}</div>
							@enderror
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5 p-2 field">
                                <span><i class="fa fa-phone-square"></i></span><input type="text" class=" input-text form-control" placeholder="Mobile" name="mobile" id="mobile" autocomplete="off" pattern="^[0-9]{10}$" maxlength="10" required=""><button class="send">Send</button>
                            </div>
                            <div class="col-sm-12 col-md-3 p-2">
                                <div class="otp input_">
                                    <input type="text" name="n1" class="otp-enter active input-text form-control" max="9999"  maxlength="1"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                                    <input type="text" name="n2" class="otp-enter input-text form-control" maxlength="1"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                                    <input type="text" name="n3" class="otp-enter input-text form-control" maxlength="1"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                                    <input type="text" name="n4" class="otp-enter input-text form-control" max="9999"  maxlength="1"  onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-3 p-2">
                                <div class="otp">
                                    <button class="Verify Verify_">Verify</button>
                                </div>
                            </div>
                            @error('mobile')
							    <div class="col-12 alert alert-danger">{{ $message }}</div>
							@enderror
                        </div>
                        <div class="row">
                            <div class="col-sm-12 col-md-5 p-2 field">
                                <span><i class="fa fa-user"></i></span><input type="text" class=" input-text form-control" name="name" id="name" placeholder="Full Name" required="">
	                            @error('name')
								    <div class="col-12 alert alert-danger">{{ $message }}</div>
								@enderror
                            </div>
                            <div class="col-sm-12 col-md-3 mt-1px">
                                <select class="form-control" name="usertype" id="usertype">
                                    <option value="">User Type</option>
                                    <option value="S">Student</option>
                                    <option value="C">Counsellor</option>
                                    <option value="J">Jobseeker</option>
                                </select>
	                            @error('usertype')
								    <div class="col-12 alert alert-danger">{{ $message }}</div>
								@enderror
                            </div>
                            <div class="col-sm-12 col-md-2">
                            </div>
                        </div>
                        <div class="row" style="position:relative;">
                            <div class="col-sm-12  p_">
                                <span class="i_agree"><span><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" required="" ></span>I agree to terms of service and privacy policy. ||</span>
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
	});
</script>
@endsection