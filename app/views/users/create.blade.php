<!-- Signup Form Markup. Gets dynamically inserted into a 'shade' element. -->
	<section class="row">
	    <form id="create-new-user" class="invert" method="POST">
	    	<div class="heading">
				<span class="heading-text">Create Your Account</span>
				<i class="center-block fa fa-angle-down"></i>
			</div>
	    	<div class="form-group">
		    	{{ Form::text('first_name', '', array('class' => 'form-control input-lg', 'placeholder' => 'First Name'))}}
		    	<span class="first_name error text-danger"></span>
	    	</div>

	    	<div class="form-group">
		    	{{ Form::text('last_name', '', array('class' => 'form-control input-lg ', 'placeholder' => 'Last Name'))}}
		    	<span class="last_name error text-danger"></span>
	    	</div>

	    	<div class="form-group">
		    	{{ Form::text('zipcode', '', array('class' => 'form-control input-lg', 'placeholder' => 'Zip Code'))}}
		    	<span class="zipcode error text-danger"></span>
	    	</div>

	    	<div class="form-group">
		    	{{ Form::email('email', '', array('class' => 'form-control input-lg', 'placeholder' => 'Email'))}}
		    	<span class="email error text-danger"></span>
	    	</div>
			
			<div class="form-group">
		    	{{ Form::password('password', array('class' => 'form-control input-lg', 'placeholder' => 'Password'))}}
		    	<span class="password error text-danger"></span>
	    	</div>

	    	{{Form::submit('Create New User', array('class' => 'btn pill btn-invert center-block'));}}
	    </form>
    </section>
