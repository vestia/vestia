<!-- Signup Form Markup. Gets dynamically inserted into a 'shade' element. -->
	<section class="row">
	    {{Form::open(['route'=>'users.store', 'class' => 'col-lg-6 create-user'])}}
	    	<div class="heading">
				<span class="heading-text">Create Your Account</span>
				<i class="center-block fa fa-angle-down"></i>
			</div>
	    	<div class="form-group">
		    	{{ Form::text('first', '', array('class' => 'form-control input-lg', 'placeholder' => 'First Name'))}}
		    	{{ $errors->first('first','<span class="text-danger">:message</span>') }}
	    	</div>

	    	<div class="form-group">
		    	{{ Form::text('last', '', array('class' => 'form-control input-lg ', 'placeholder' => 'Last Name'))}}
		    	{{ $errors->first('last','<span class="text-danger">:message</span>') }}
	    	</div>

	    	<div class="form-group">
		    	{{ Form::text('zipcode', '', array('class' => 'form-control input-lg', 'placeholder' => 'Zip Code'))}}
		    	{{ $errors->first('zipcode','<span class="text-danger">:message</span>') }}
	    	</div>

	    	<div class="form-group">
		    	{{ Form::email('email', '', array('class' => 'form-control input-lg', 'placeholder' => 'Email'))}}
		    	{{ $errors->first('email','<span class="text-danger">:message</span>') }}
	    	</div>
			
			<div class="form-group">
		    	{{ Form::password('password', array('class' => 'form-control input-lg', 'placeholder' => 'Password'))}}
	    		{{ $errors->first('password','<span class="text-danger">:message</span>') }}
	    	</div>

	    	{{Form::submit('Create Account', array('class' => 'btn btn-lg pill btn-invert center-block','id' => 'submit-new-user'));}}
	    {{ Form::close()}}
    </section>
