{{Form::open(['route'=>'reviews.store','id' => 'review-form'])}}
    <a id="review-close"><i class="fa fa-times-circle pull-right"></i></a>
	<h3> Review </h3>
	<div class="form-group">
    	{{ Form::label('bid','Bid:')}}
    	<input id="bid-slider" name="bid" class="form-control" type="range" min="650000" max="1200000" step="5000" value="900000"/>
    	{{ $errors->first('bid','<span class="text-danger">:message</span>') }}
	</div>

	<a id="review-submit" class="btn pill btn-lg btn-ko" href="#" role="button">Submit Review</a>
{{ Form::close()}}