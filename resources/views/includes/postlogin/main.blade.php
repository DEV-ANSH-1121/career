<!DOCTYPE html>
<html lang="en">
<head>
  	@include('includes.postlogin.head')
</head>
<body class="hold-transition sidebar-mini">
	<input type="hidden" id="baseurl" value="{{url('/')}}">
	<div class="wrapper">
	  <!-- Preloader -->
	  <div class="preloader flex-column justify-content-center align-items-center">
	    <img class="animation__shake" src="{{url('postlogin/images/icon.png')}}" alt="AdminLTELogo" height="60" width="60">
	  </div>
	  <!-- Navbar -->
	 
	 	@include('includes.postlogin.header')
	  	@include('includes.postlogin.navbar')
	  	@yield('content')
	  	@include('includes.postlogin.footer')

	  <!-- Control Sidebar -->
	  <aside class="control-sidebar control-sidebar-dark">
	    <!-- Control sidebar content goes here -->
	  </aside>
	  <!-- /.control-sidebar -->
	</div>
<!-- ./wrapper -->
	@include('includes.postlogin.modal')

	<!-- jQuery -->
	@include('includes.postlogin.script')
 
</body>
</html>
