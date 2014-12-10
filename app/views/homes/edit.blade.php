@extends('layout')

@section('content')
<section class="row">
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
	  <!-- Panel One -->
	  <div class="panel panel-default">
	    <div class="panel-heading" role="tab" id="headingOne">
	      <h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Edit Vitals</h4>
	    </div>
	    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
	      <div class="panel-body">
	        {{ Form::model($home, ['route' => ['homes.update', $home->id], 'method' => 'put']) }}
		    	<div class="form-group">
			    	{{ Form::label('name','Nickname:')}}
			    	{{ Form::text('name', Input::old('name'), array('class' => 'form-control'))}}
			    	{{ $errors->first('name','<span class="text-danger">:message</span>') }}
		    	</div>

		    	<div class="form-group">
			    	{{ Form::label('street','Street:')}}
			    	{{ Form::text('street', Input::old('street'), array('class' => 'form-control'))}}
			    	{{ $errors->first('street','<span class="text-danger">:message</span>') }}
		    	</div>

		    	<div class="form-group">
			    	{{ Form::label('unit','Unit/Apt:')}}
			    	{{ Form::text('unit', Input::old('unit'), array('class' => 'form-control'))}}
			    	{{ $errors->first('unit','<span class="text-danger">:message</span>') }}
		    	</div>

		    	<div class="form-group">
			    	{{ Form::label('city','City:')}}
			    	{{ Form::text('city', Input::old('city'), array('class' => 'form-control'))}}
			    	{{ $errors->first('city','<span class="text-danger">:message</span>') }}
		    	</div>
				
				<div class="form-group">
			    	{{ Form::label('zipcode','Zip Code:')}}
			    	{{ Form::text('zipcode', Input::old('name'), array('class' => 'form-control'))}}
		    		{{ $errors->first('zipcode','<span class="text-danger">:message</span>') }}
		    	</div>

		    	<div class="row">
			    	<div class="form-group col-xs-6">
				    	{{ Form::label('bedrooms','Bedrooms:')}}
				    	{{ Form::select('bedrooms', array('1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10), Input::old('bedrooms'),array('class' => 'form-control'))}}
			    		{{ $errors->first('bedrooms','<span class="text-danger">:message</span>') }}
			    	</div>

			    	<div class="form-group col-xs-6">
				    	{{ Form::label('bathrooms','Bathrooms:')}}
				    	{{ Form::select('bathrooms', array('1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5,'6'=>6,'7'=>7,'8'=>8,'9'=>9,'10'=>10),Input::old('bathrooms'), array('class' => 'form-control'))}}
			    		{{ $errors->first('bathrooms','<span class="text-danger">:message</span>') }}
			    	</div>
			    </div>

			    <div class="row">
			    	<div class="form-group col-xs-6">
				    	{{ Form::label('sqft','Square Feet:')}}
				    	{{ Form::number('sqft', Input::old('sqft'), array('class' => 'form-control'))}}
				    	{{ $errors->first('sqft','<span class="text-danger">:message</span>') }}
			    	</div>

			    	<div class="form-group col-xs-6">
				    	{{ Form::label('lot_size','Lot Size:')}}
				    	{{ Form::number('lot_size', Input::old('lot_size'), array('class' => 'form-control'))}}
				    	{{ $errors->first('lot_size','<span class="text-danger">:message</span>') }}
			    	</div>
			    </div>

		    	<div class="form-group">
			    	{{ Form::label('description','Describe It:')}}
			    	{{ Form::textarea('description', Input::old('description'), array('class' => 'form-control'))}}
		    		{{ $errors->first('description','<span class="text-danger">:message</span>') }}
		    	</div>
		    	{{Form::submit('Update', array('class' => 'btn btn-primary'));}}
			{{ Form::close()}}
	      </div>
	    </div>
	  </div>

	  <!-- Panel Two -->
	  <div class="panel panel-default">
	    <div class="panel-heading" role="tab" id="headingTwo">
	      <h4 class="panel-title" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">Edit Projects</h4>
	    </div>
	    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
	      <div class="panel-body">
	        {{ $home->projects }}
	      </div>
	    </div>
	  </div>

	</div>
</section>

@stop