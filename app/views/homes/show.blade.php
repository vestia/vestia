@extends('layout')

@section('content')
	<section class="row cover">

    	<div id="home-cover-carousel" class="carousel slide" data-ride="carousel" data-interval="false">
    	    <ol class="carousel-indicators">
    	        <li data-target="#carousel-id" data-slide-to="0" class=""></li>
    	        <li data-target="#carousel-id" data-slide-to="1" class=""></li>
    	        <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
    	    </ol>
            <div class="carousel-caption">
                <h1>{{ $home->name }}</h1>
                <p>{{ $home->street}}, {{ $home->city, $home->zip}}</p>
            </div>
    	    <div class="carousel-inner">
    	        <div class="item active">
    	            <img data-src="{{ URL::asset('images/'.$home->cover); }}" alt="First slide" src="{{ URL::asset('images/'.$home->cover); }}">
    	        </div>
    	        <div class="item next">
    	            <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzY2NiI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNmE2YTZhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+U2Vjb25kIHNsaWRlPC90ZXh0Pjwvc3ZnPg==">
    	            <div class="container">
    	                <div class="carousel-caption">
    	                    <h1>Another example headline.</h1>
    	                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
    	                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
    	                </div>
    	            </div>
    	        </div>
    	    </div>
    	    <a class="left carousel-control" href="#carousel-id" data-slide="prev"><i class="fa fa-chevron-circle-left"></i></a>
    	    <a class="right carousel-control" href="#carousel-id" data-slide="next"><i class="fa fa-chevron-circle-right"></i></span></a>
    	</div>
    </section>


    <section class="row review-container">
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <a id="review-toggle">Leave a review</a>
        	{{Form::open(['route'=>'reviews.store','id' => 'review-form'])}}
                <a id="review-close"><i class="fa fa-times-circle pull-right"></i></a>
    	    	<h3> Review </h3>

    	    	{{ Form::hidden('home_id', $home->id); }}
    	    	<div class="form-group">
    		    	{{ Form::label('bid','Bid:')}}
    		    	{{ Form::number('bid', '', array('class' => 'form-control'))}}
    		    	{{ $errors->first('bid','<span class="text-danger">:message</span>') }}
    	    	</div>

    	    	<div class="form-group">
    		    	{{ Form::label('comment','What do you think?')}}
    		    	{{ Form::textarea('comment', '', array('class' => 'form-control'))}}
    	    		{{ $errors->first('comment','<span class="text-danger">:message</span>') }}
    	    	</div>

    	    	<a id="review-submit" class="btn btn-lg btn-primary" href="#" role="button">Submit Review</a>
    	    {{ Form::close()}}
        </div>
	</section>

    <section class="row vitals">
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <h4>Description</h4>
            <p>{{ $home->description }}</p>
            <h4>Vitals</h4>
            <ul>
                <li>{{$home->bedrooms}} Bedrooms</li>
                <li>{{$home->bathrooms}} Bathrooms</li>
                <li>{{$home->sqft}} Square Feet</li>
                <li>{{$home->lot_size}} Acres</li>
            </ul>
        </div>       
    </section>
@stop