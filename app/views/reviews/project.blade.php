{{Form::open(['route'=>'reviews.update','id' => 'project-form'])}}
	{{ Form::hidden('id', $review->id, array('id' => 'review_id')); }}
	<div class="form-group">
		{{ Form::label('project','Which of these would have increased your bid the most?')}}
		{{ Form::select('project_id',
			array(
				$review->home->projects[0]->id => $review->home->projects[0]->name, 
				$review->home->projects[1]->id => $review->home->projects[1]->name,
				$review->home->projects[2]->id => $review->home->projects[2]->name
				),
			'Pick One', 
			array('class' => 'form-control'))
		}}
		{{ $errors->first('project','<span class="text-danger">:message</span>') }}
	</div>
{{ Form::close()}}