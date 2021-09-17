<!DOCTYPE html>
<html>
<head>
	@include('includes.prelogin.head')
</head>
<body>

<input type="hidden" id="baseurl" value="{{url('/')}}">
	@include('includes.prelogin.header')
	@yield('content')
	@if(Route::current()->getName() != 'loginPage')
		@include('includes.prelogin.footer')
	@endif
	@include('includes.prelogin.script')

</body>
</html>