<!DOCTYPE html>
<html lang="en">
	<head>
		<title>RealCo::Local</title>
		<meta charset="UTF-8">
		<meta name=description content="">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap CSS -->
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="{{URL::asset('css/style.css'); }}">
	</head>
	<body>

		<!-- NavBar -->
		<nav class="row navbar-fixed-top global-nav" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">RealCo</a>
				</div>
			
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li class="">{{ HTML::link('/dash','Dash') }} </li>	
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="/home" class="dropdown-toggle" data-toggle="dropdown">
								@if( Auth::check())
									{{ Auth::user()->username}}
								@elseif( Auth::guest())
									Options
								@endif
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li>{{ HTML::link('/login','Login') }} </li>
								<li>{{ HTML::link('/signup','Signup') }} </li>
								<li>{{ HTML::link('/logout','Logout') }} </li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>

		<div class="container-fluid">


			@yield('content')
		</div>
		<!-- jQuery -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

		<script src="{{URL::asset('js/script.js'); }}"></script>
	</body>
</html>