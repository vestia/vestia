@extends('layout')

@section('content')
	<div class="container">
		<h3> RealCO</h3>
		{{ HTML::link('/signup', 'Sign Up') }}
		{{ HTML::link('/login', 'Log In') }}
	</div>
@stop