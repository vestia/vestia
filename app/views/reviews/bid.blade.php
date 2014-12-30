{{Form::open(['route'=>'reviews.store','id' => 'bid-form'])}}
    <a id="review-close"><i class="fa fa-times-circle pull-right"></i></a>
	<h3> Bid </h3>
	{{ Form::hidden('home_id', $home->id); }}
	<div class="form-group">
    	{{ Form::label('bid','Bid:')}}
    	<input id="bid-slider" name="bid" class="form-control" type="range" min="{{$home->minBid();}}" max="{{$home->maxBid();}}" step="5000" value="900000"/>
    	{{ $errors->first('bid','<span class="text-danger">:message</span>') }}
	</div>
{{ Form::close()}}