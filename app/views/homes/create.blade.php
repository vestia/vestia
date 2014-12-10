@extends('layout')

@section('content')
	<section class="row">
	    {{Form::open(['route'=>'homes.store','class' => 'col-lg-6', 'files' => true])}}
	    	<h3> Create New Home </h3>
	    	<div class="form-group">
		    	{{ Form::label('name','Nickname:')}}
		    	{{ Form::text('name', '', array('class' => 'form-control'))}}
		    	{{ $errors->first('name','<span class="text-danger">:message</span>') }}
	    	</div>

	    	<div class="form-group">
		    	{{ Form::label('street','Street:')}}
		    	{{ Form::text('street', '', array('class' => 'form-control'))}}
		    	{{ $errors->first('street','<span class="text-danger">:message</span>') }}
	    	</div>

	    	<div class="form-group">
		    	{{ Form::label('unit','Unit/Apt:')}}
		    	{{ Form::text('unit', '', array('class' => 'form-control'))}}
		    	{{ $errors->first('unit','<span class="text-danger">:message</span>') }}
	    	</div>

	    	<div class="form-group">
		    	{{ Form::label('city','City:')}}
		    	{{ Form::text('city', '', array('class' => 'form-control'))}}
		    	{{ $errors->first('city','<span class="text-danger">:message</span>') }}
	    	</div>
			
			<div class="form-group">
		    	{{ Form::label('zipcode','Zip Code:')}}
		    	{{ Form::text('zipcode', Auth::user()->zipcode, array('class' => 'form-control'))}}
	    		{{ $errors->first('zipcode','<span class="text-danger">:message</span>') }}
	    	</div>

	    	<div class="form-group">
		    	{{ Form::label('cover','Cover Photo:')}}
		    	{{ Form::file('cover', '', array('class' => 'form-control'))}}
	    		{{ $errors->first('cover','<span class="text-danger">:message</span>') }}
	    	</div>

	    	<div class="form-group">
		    	{{ Form::label('cover','Photo2:')}}
		    	{{ Form::file('cover', '', array('class' => 'form-control'))}}
	    		{{ $errors->first('cover','<span class="text-danger">:message</span>') }}
	    	</div>

	    	<div class="form-group">
		    	{{ Form::label('bedrooms','Bedrooms:')}}
		    	{{ Form::select('bedrooms', array('1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10), array('class' => 'form-control'))}}
	    		{{ $errors->first('bedrooms','<span class="text-danger">:message</span>') }}
	    	</div>

	    	<div class="form-group">
		    	{{ Form::label('bathrooms','Bathrooms:')}}
		    	{{ Form::select('bathrooms', array('1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10), array('class' => 'form-control'))}}
	    		{{ $errors->first('bathrooms','<span class="text-danger">:message</span>') }}
	    	</div>

	    	<div class="form-group">
		    	{{ Form::label('sqft','Square Feet:')}}
		    	{{ Form::number('sqft', '', array('class' => 'form-control'))}}
		    	{{ $errors->first('sqft','<span class="text-danger">:message</span>') }}
	    	</div>

	    	<div class="form-group">
		    	{{ Form::label('lot_size','Lot Size:')}}
		    	{{ Form::number('lot_size', '', array('class' => 'form-control'))}}
		    	{{ $errors->first('lot_size','<span class="text-danger">:message</span>') }}
	    	</div>

	    	<div class="form-group">
		    	{{ Form::label('description','Describe It:')}}
		    	{{ Form::textarea('description', '', array('class' => 'form-control'))}}
	    		{{ $errors->first('description','<span class="text-danger">:message</span>') }}
	    	</div>

	    	<div class="form-group">
		    	{{ Form::label('initial_bid','What\'s it worth?:')}}
		    	{{ Form::number('initial_bid', '', array('class' => 'form-control'))}}
		    	{{ $errors->first('initial_bid','<span class="text-danger">:message</span>') }}
	    	</div>

	    	{{Form::submit('Create', array('class' => 'btn btn-primary'));}}
	    {{ Form::close()}}
    </section>
@stop