{{Form::open(['route'=>'users.store', 'class' => 'col-lg-6 create-user'])}}
	<h3> Projects </h3>
	<div class="form-group col-xs-6">
    	{{ Form::label('project1','Project 1')}}
    	{{ Form::select('project1', array('1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10), Input::old('bedrooms'),array('class' => 'form-control'))}}
		{{ $errors->first('project1','<span class="text-danger">:message</span>') }}
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

	{{Form::submit('Create Account', array('class' => 'btn btn-lg pill btn-ko center-block','id' => 'submit-new-user'));}}
{{ Form::close()}}