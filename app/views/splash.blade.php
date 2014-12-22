@extends('layout')

@section('content')
	<section class="row marquis">
		<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
			<h1>Realyze</h1>
			<h3>We help homeowners understand and increase the value of their homes.</h3>

			<button type="button" class="btn pill btn-lg btn-primary center-block signup">
				Join Us Today
				<i class="fa fa-play-circle pull-right"></i>
			</button>

			{{ HTML::link('/login', 'Log In', array('class'=>'login')) }}
		</div>
	</section>

	<section class="row how">
		<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
			<div class="heading">
				<span class="heading-text">How It Works</span>
				<i class="center-block fa fa-angle-down"></i>
			</div>
			
			<!-- Step 1 -->
			<div class="row step">
				<div class="col-xs-3">
					<div class="circle">
						<i class="fa fa-pencil"></i>
					</div>
				</div>
				<div class="col-xs-9">
					<h4>1. Homeowners create profiles</h4>
					<p>Homeowners create their own profiles including key stats, recent photos and upgrades they’re considering.</p>
				</div>
			</div>

			<!-- Step 2 -->
			<div class="row step">
				<div class="col-xs-3">
					<div class="circle">
						<i class="fa fa-file-text"></i>
					</div>
				</div>
				<div class="col-xs-9">
					<h4>2. Qualified users leave bids</h4>
					<p>Local homeowners, real estate pros, and vetted area experts leave bids and vote on home upgrades.</p>
				</div>
			</div>

			<!-- Step 3 -->
			<div class="row step">
				<div class="col-xs-3">
					<div class="circle">
						<i class="fa fa-bar-chart"></i>
					</div>
				</div>
				<div class="col-xs-9">
					<h4>3. Everyone gets smarter</h4>
					<p>Homeowners get consistent, real-time information about the value of their home. Bidders get live feedback on how their opinion stacks up with others’.</p>
				</div>
			</div>

			<div class="row cta">
				<button type="button" class="btn pill btn-lg btn-ko center-block signup">Start Learning Now<i class="fa fa-play-circle pull-right"></i></button>
			</div>

		</div>
	</section>

	<section class="row why">
		<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 container">
			<div class="heading">
				<span class="heading-text">Why We're Doing This</span>
				<i class="center-block fa fa-angle-down"></i>
			</div>

			<h3>Our mission is to help homeowners understand and increase the value of their homes.</h3>

			<div class="row cta">
				<button type="button" class="btn pill btn-lg btn-invert center-block signup">Get Started<i class="fa fa-play-circle pull-right"></i></button>
			</div>

			<h3 class="light">
			A home is the most important investment most of us will ever make. Yet for many, the value of that investment is at best an estimate and at worst a complete mystery.
			</h3>
			<h3 class="light">
			We believe homeowners should have complete control over how their home appears online, transparent access to real-time data about its market value, and the digital tools needed to increase that value over time in today’s market.
			</h3>
			<h3 class="light">
			After all, it’s your investment. Shouldn't you be in control?
			</h3>

			<div class="row cta">
				<button type="button" class="btn pill btn-lg btn-invert center-block signup">Take Control<i class="fa fa-play-circle pull-right"></i></button>
			</div>

		</div>
	</section>
@stop