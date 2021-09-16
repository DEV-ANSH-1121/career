<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Create Account | Some Bank</title>
</head>
<body>
	<h1>Create Your Account</h1>
	<form method="post" action="{{url('/create-account')}}">
		{{csrf_field()}}

		<label for="name">Your Name : </label> <input type="text" name="name" id="name"><br><br>

		<label for="email">Your Email : </label> <input type="email" name="email" id="email"><br><br>

		<label for="password">Your Password : </label> <input type="password" name="password" id="password"><br><br>

		@if(!empty($users))
		<label for="select-benificiary">Indtoducer : </label>
		<select name="introducer_id">
			<option value="0">Select your introducer</option>
			<option value="0">No One</option>
			@foreach($users as $user)
			<option value="{{$user->id}}">{{$user->name}}</option>
			@endforeach
		</select><br><br>
		@endif

		<input type="submit" name="submit" value="Create Account">
	</form>
</body>
</html>