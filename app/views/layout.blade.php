<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Realyze::Local</title>
		<meta charset="UTF-8">
		<meta name=description content="">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Font-Awesome CSS -->
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		
		<!-- Google Fonts CSS -->
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,400italic' rel='stylesheet' type='text/css'>
		
		<!-- Our Compiled CSS -->
		<link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css'); }}">

		<!-- Slider CSS -->
		<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/vendor/seiyria-bootstrap-slider/dist/css/bootstrap-slider.css'); }}">

	</head>
	<body>
		<!-- Off-Canvas Nav -->
		@include('nav')

		<div id="page-wrap" class="container-fluid">
			
			<!-- Shade Container -->
			<div class="modal fade shade" id="shade">
				<div class="modal-dialog">
					<div class="modal-content">
					
						<div id="shade-content" class="modal-body">
						</div>
						<button id="shade-close" type="button" class="btn btn-link center-block" data-dismiss="modal">close</button>

					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

			<!-- NavBar -->
			<div class="navbar navbar-default navbar-fixed-top">
		  		<div class="btn btn-primary" type="button" data-toggle="offcanvas" data-target=".navmenu" data-canvas="#page-wrap" data-recalc="false">
		   			<i class="fa fa-bars"></i>
		  		</div>
			</div>

			<!-- Main Page Content -->
			<div id="page-content">
				@yield('content')
			</div>

			<!-- Global Footer -->
			@include('footer')
	
		</div>



		<!-- Vendor JS (jQuery, Bootsrap, Others -->
		<script src="{{ URL::asset('js/vendor.min.js'); }}"></script>

		<!-- Our JavaScript -->
		<!-- For Production, need to add our main.min.js file instead of just this -->
		<script src="{{URL::asset('assets/js/script.js'); }}"></script>

	</body>
</html>