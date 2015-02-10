{{Form::open(['route'=>'reviews.store','id' => 'bid-form', 'class' => 'invert'])}}
    <a id="review-close"><i class="fa fa-times-circle pull-right"></i></a>
	{{ Form::hidden('home_id', $home->id); }}
	<div class="form-group">
    	{{ Form::label('bid','What do you think it\'s worth?:')}}
    	<input id="bid-slider" name="bid" class="form-control" type="range" min="{{$home->minBid();}}" max="{{$home->maxBid();}}" step="5000" value="900000" data-popup-enabled="true" data-show-value="true"/>
    	<div class="slider-value slider-value-min pull-left">${{number_format($home->minBid());}}</div>
    	<div class="slider-value slider-value-max pull-right">${{number_format($home->maxBid());}}</div>
	</div>
{{ Form::close()}}