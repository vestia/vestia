@extends('layout')

@section('content')
	<section class="row">
	    {{Form::open(['route'=>'users.store','class' => 'col-lg-6'])}}
	    	<h3> Create New User </h3>
	    	<div class="form-group">
		    	{{ Form::label('first','First Name:')}}
		    	{{ Form::text('first', '', array('class' => 'form-control'))}}
		    	{{ $errors->first('first','<span class="text-danger">:message</span>') }}
	    	</div>

	    	<div class="form-group">
		    	{{ Form::label('last','Last Name:')}}
		    	{{ Form::text('last', '', array('class' => 'form-control'))}}
		    	{{ $errors->first('last','<span class="text-danger">:message</span>') }}
	    	</div>

	    	<div class="form-group">
		    	{{ Form::label('zipcode','Zip Code:')}}
		    	{{ Form::text('zipcode', '', array('class' => 'form-control'))}}
		    	{{ $errors->first('zipcode','<span class="text-danger">:message</span>') }}
	    	</div>

	    	<div class="form-group">
		    	{{ Form::label('email','Email:')}}
		    	{{ Form::email('email', '', array('class' => 'form-control', 'placeholder' => 'bob@example.com'))}}
		    	{{ $errors->first('email','<span class="text-danger">:message</span>') }}
	    	</div>
			
			<div class="form-group">
		    	{{ Form::label('password','Password:')}}
		    	{{ Form::password('password', array('class' => 'form-control'))}}
	    		{{ $errors->first('password','<span class="text-danger">:message</span>') }}
	    	</div>

	    	{{Form::submit('Create Account', array('class' => 'btn btn-primary'));}}
	    {{ Form::close()}}
    </section>
@stop