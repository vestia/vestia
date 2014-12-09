@extends('layout')

@section('content')
	<section class="row">
	    	<h3> Hey {{ $user->username }} </h3>
	    	<p>Your email is: {{ $user->email}}</p>
    </section>
@stop