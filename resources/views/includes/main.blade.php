<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body>

<input type="hidden" id="baseurl" value="{{url('/')}}">
	@include('includes.header')
	@yield('content')
	@if(Route::current()->getName() != 'loginPage')
		@include('includes.footer')
	@endif
	@include('includes.script')

</body>
</html>