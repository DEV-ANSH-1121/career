<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body>
	@include('includes.header')
	@yield('content')
	@if(Route::current()->getName() != 'loginPage')
		@include('includes.footer')
	@endif
	@include('includes.script')

</body>
</html>