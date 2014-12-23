<!-- Signup Form Markup. Gets dynamically inserted into a 'shade' element. -->
	<section class="row">
	    <form class="col-lg-6 create-user">
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

	    	<button type="button" id="submit-new-user" class="btn pill btn-lg btn-invert center-block">
				Create Account
				<i class="fa fa-play-circle pull-right"></i>
			</button>
	    </form>
    </section>
