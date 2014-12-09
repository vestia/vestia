@extends('layout')

@section('content')
	<div class="container">
		<h3> Hey {{ $user->name(); }}, welcome to RealCo.</h3>

		<p>Dashboard</p>

		{{ HTML::linkRoute('homes.create', 'Create a Home Profile') }}

		<h3>Your Homes</h3>
		@foreach($user->homes as $home)
			<div class="panel panel-default">
			  <div class="panel-heading">{{link_to('homes/'.$home->id, $home->name); }}</div>
			  <div class="panel-body">
			    <h3>Recent Reviews</h3>
			    <ul class="list-group">
			    	@foreach($home->reviews as $review)
			    		<li class="list-group-item"><strong>${{ $review->bid }}</strong> - "{{ $review->comment }}" by {{$review->author->name();}}</li>
			    	@endforeach
			    </ul>
			  </div>
			</div>
		@endforeach
	</div>
@stop