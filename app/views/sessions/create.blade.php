@extends('layout')

@section('content')
	<section class="row">
	    {{Form::open(['route'=>'sessions.store','class' => 'col-lg-6'])}}
	    	<h3> Login </h3>

	    	<div class="form-group">
		    	{{ Form::label('email','Email:')}}
		    	{{ Form::email('email', '', array('class' => 'form-control', 'placeholder' => 'bob@example.com'))}}
	    	</div>
			
			<div class="form-group">
		    	{{ Form::label('password','Password:')}}
		    	{{ Form::password('password', array('class' => 'form-control'))}}
	    	</div>

	    	{{Form::submit('Create', array('class' => 'btn btn-primary'));}}
	    {{ Form::close()}}
    </section>
@stop