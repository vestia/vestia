@extends('layout')

@section('content')
	<section class="row cover">

    	<div id="home-cover-carousel" class="carousel slide" data-ride="carousel" data-interval="false">

            <div class="carousel-caption col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <h1>{{ $home->name }}</h1>
                <p>{{ $home->street}}, {{ $home->city, $home->zip}}</p>
            </div>

    	    <div class="carousel-inner">
    	        <div class="item active">
    	            <img data-src="{{ URL::asset('images/'.$home->cover); }}" alt="First slide" src="{{ URL::asset('images/'.$home->cover); }}">
    	        </div>
    	        <div class="item next">
    	            <img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzY2NiI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNmE2YTZhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+U2Vjb25kIHNsaWRlPC90ZXh0Pjwvc3ZnPg==">
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
                <i class="center-block fa fa-arrow-circle-up pull-left success"></i>
                <span class="section-heading-text">Value Increasing</span>
            </div>
            <button id="bid-toggle" type="button" class="btn pill btn-lg btn-invert center-block" data-home-id="{{$home->id}}">
                Bid to Unlock
                <i class="fa fa-hand-o-up pull-right"></i>
            </button>
        </div>
    </section>

    <section class="row info">
        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

            <!-- Description -->
            <section class="profile-section">
                <div class="section-heading">
                    <i class="center-block fa fa-quote-left pull-left"></i>
                    <span class="section-heading-text">Description</span>
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
                    <i class="center-block fa fa-controls pull-left"></i>
                    <span class="section-heading-text">Technicals</span>
                </div>
                <p class="section-body">
                    Built in 1988<br/>
                    Gas Furnace<br/>
                </p>
            </section>
        </div>       
    </section>
@stop