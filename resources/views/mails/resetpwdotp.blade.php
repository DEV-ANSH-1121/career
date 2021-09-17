<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap');
		*{
			padding: 0px;
			margin: 0px;
			box-sizing: border-box;
		}
		body{
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			font-family: sans-serif;
			font-family: 'Poppins', sans-serif;
		}
		.otp_box{
			position: relative;
			width: 500px;
			padding: 20px 0px;
			background: #fff;
			box-shadow: 5px 5px 10px rgba(0, 0, 0, .1),-1px -1px 1px rgba(0, 0, 0, .1);
			border-radius: 5px;
			overflow: hidden;
		}
		.otp_box:after{
			position: absolute;
		    bottom: -99px;
		    right: -218px;
		    width: 400px;
		    height: 200px;
		    background: #08583d;
		    border-radius: 50%;
		    content: '';
		}
		.otp_box:before{
			position: absolute;
		    top: -143px;
            left: -263px;
		    width: 400px;
		    height: 200px;
		    background: #08583d;
		    border-radius: 50%;
		    content: '';
		}
		.otp_box header{
			display: flex;
			justify-content: center;
			align-items: center;
			position: relative;
			width: 100%;
			
			padding: 10px 20px;

		}
		.otp_box header img{ 
			width: 150px;

		}
		.otp_content{
			padding: 0px 20px;
		}
		.otp_content h4{
			text-align: center;
			font-size: 25px;
			padding: 10px;
		}
		.otp_content p{
			padding: 10px 0px;
		}
	    .otp_content em{
	    	color: #7474dd;
	    	text-decoration-line: underline;
	    }
	</style>
</head>
<body>
     
        <div class="otp_box">
       	    <header>
       	    	<img src="https://careerlinked.org/images/margdarshak-logo.png" />
       	    </header>
       	    
       	    <div class="otp_content">
       	    	<p>Subject: OTP to reset your password</p>
       	    	<p>Your OTP is : <em>{{$data['otp']}}</em></p>
       	    	<p>Use this code to reset your password.</p>
       	    	<p>Thanks & warm regards,</p>
       	    	<p>Team Margdarshak</p>
       	    </div>
       </div>
</body>
</html>