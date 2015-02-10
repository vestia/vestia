<section class="row">
   <form id="create-new-session" class="invert" method="POST">
    	<div class="heading">
			<span class="heading-text">Log In</span>
			<i class="center-block fa fa-angle-down"></i>
		</div>

		<span class="login error text-danger"></span>

    	<div class="form-group">
	    	{{ Form::email('email', '', array('class' => 'form-control input-lg', 'placeholder' => 'Email'))}}
	    	<span class="email error text-danger"></span>
    	</div>
		
		<div class="form-group">
	    	{{ Form::password('password', array('class' => 'form-control input-lg', 'placeholder' => 'Password'))}}
	    	<span class="password error text-danger"></span>
    	</div>

    	{{Form::submit('Log In', array('class' => 'btn pill btn-invert center-block'));}}

    	{{ HTML::link('', 'Sign Up', array('class'=>'signup')) }}
    </form>
</section>