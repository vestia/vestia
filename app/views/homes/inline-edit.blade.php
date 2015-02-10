@extends('layout')

@section('content')
	<section class="row cover">

    	<div id="home-cover-carousel" class="carousel slide" data-ride="carousel" data-interval="false">

            <div class="carousel-caption col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <h1 class="extra-light">{{ $home->name }}</h1>
                <p>{{$home->bedrooms}} Bedrooms | {{$home->bathrooms}} Bathrooms | {{$home->sqft}} Square Feet</p>
                <p>{{ $home->street}}, {{ $home->city, $home->zipcode}}</p>
            </div>

    	    <div class="carousel-inner">
    	        <div class="item active">
    	            <img data-src="{{ URL::asset('images/'.$home->cover); }}" alt="First slide" src="{{ URL::asset('images/'.$home->cover); }}">
    	        </div>
    	        <div class="item next">
    	            <img data-src="{{ URL::asset('images/kitchen.jpg'); }}" alt="First slide" src="{{ URL::asset('images/kitchen.jpg'); }}">
    	        </div>
                <div class="item">
                    <img data-src="{{ URL::asset('images/bedroom.jpg'); }}" alt="First slide" src="{{ URL::asset('images/bedroom.jpg'); }}">
                </div>
    	    </div>
    	    <a class="left carousel-control" href="#home-cover-carousel" data-slide="prev"><i class="fa fa-chevron-circle-left"></i></a>
    	    <a class="right carousel-control" href="#home-cover-carousel" data-slide="next"><i class="fa fa-chevron-circle-right"></i></span></a>
    	</div>
    </section>

    <section class="row bid">
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="section-heading">
                <i class="center-block fa fa-signal pull-left"></i>
                <span class="section-heading-text">Bidding</span>
            </div>
            <div id="bid-content">
                <div class="bid-trend center-block">
                    <div class="headline center-block">
                        <i class="fa fa-arrow-circle-up pull-left success"></i>
                        <span class="section-heading-text">Value Increasing</span>
                    </div>
                    <p>348 qualified users have entered bids on your home in the last 30 days, with an average bid 2.4% higher than the previous period.</p>
                </div>
            </div>
            <button id="bid-toggle" type="button" class="btn pill btn-lg btn-invert center-block" data-home-id="{{$home->id}}">
                See Full Stats
                <i class="fa fa-chart pull-right"></i>
            </button>
        </div>
    </section>

    <section class="row info">
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

            <!-- Description -->
            <section class="profile-section">
                <div class="section-heading">
                    <i class="fa fa-quote-left pull-left"></i>
                    <span class="section-heading-text">Description</span>
                    <i class="fa fa-pencil pull-right edit" data-section="description"></i>
                </div>
                <p class="section-body">
                    {{ $home->description }}
                </p>
            </section>

            <!-- Vitals & Extras -->
            <div class="row">
                <section class="profile-section col-xs-6">
                    <div class="section-heading">
                        <i class="center-block fa fa-check pull-left"></i>
                        <span class="section-heading-text">Vitals</span>
                        <i class="fa fa-pencil pull-right edit" data-section="vitals"></i>
                    </div>
                    <p class="section-body">
                        {{$home->bedrooms}} Bedrooms<br/>
                        {{$home->bathrooms}} Bathrooms<br/>
                        {{$home->sqft}} Square Feet<br/>
                        {{$home->lot_size}} Acres<br/>
                    </p>
                </section>

                <section class="profile-section col-xs-6">
                    <div class="section-heading">
                        <i class="center-block fa fa-star pull-left"></i>
                        <span class="section-heading-text">Extras</span>
                        <i class="fa fa-pencil pull-right edit" data-section="extras"></i>
                    </div>
                    <p class="section-body">
                        2 Car Garage<br/>
                        Fireplace<br/>
                        Game Room<br/>
                        Finished Basement<br/>
                    </p>
                </section>
            </div>

            <!-- Technicals -->
            <section class="profile-section">
                <div class="section-heading">
                    <i class="center-block fa fa-cog pull-left"></i>
                    <span class="section-heading-text">Technicals</span>
                    <i class="fa fa-pencil pull-right edit" data-section="technicals"></i>
                </div>
                <p class="section-body">
                    Built in 1988<br/>
                    Gas Furnace<br/>
                </p>
            </section>
        </div>       
    </section>
@stop