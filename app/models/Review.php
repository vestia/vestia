<?php

class Review extends \Eloquent {
	
	public $errors;

	protected $fillable = array('user_id', 'home_id', 'bid', 'comment','project_id','project_value');

	public $rules = [
		'user_id' => 'required',
		'home_id' => 'required',		
		'bid' => 'required'
	];

	public function home()
	{
		return $this->belongsTo('Home');
	}

	public function author()
	{
		return $this->belongsTo('User','user_id');
	}

	public function project()
	{
		return $this->hasOne('Project');
	}

	public function isValid()
	{

		$validation = Validator::make($this->attributes, $this->rules);
		
		if($validation->passes()) return true;

		$this->errors = $validation->messages();
		return false;
	}

}