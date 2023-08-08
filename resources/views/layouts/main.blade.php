<!doctype html>
<html lang="en">

<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	@include('layouts.include') 

	<!-- SCRIPT -->
	@yield('header_script')
	<!-- END SCRIPT -->	
</head>

<body onload="onLoad();">
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		@include('layouts.navbar')
		<!-- END NAVBAR -->

		<!-- LEFT SIDEBAR -->
		@include('layouts.sidebar')
		<!-- END LEFT SIDEBAR -->

		<!-- MAIN -->
		@yield('container')
		<!-- END MAIN -->

		<!-- FOOTER -->
		@include('layouts.footer')
		<!-- END FOOTER -->
	</div>
	<!-- END WRAPPER -->

	<!-- FOOTER SCRIPT -->
	@include('layouts.footer_script')
	<!-- END FOOTER SCRIPT-->
	
	<!-- SCRIPT -->
	@yield('addtional_script')
	<!-- END SCRIPT -->		
</body>

</html>
