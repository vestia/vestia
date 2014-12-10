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