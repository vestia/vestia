<?php

class Project extends \Eloquent {
	protected $fillable = [
		'name',
		'type',
		'category',
		'description',
		'calculated_value',
		'active'
	];

	public $errors;

	public $rules = [
		'name' => 'required',
		'category' => 'required',
		'type' => 'required',
		'description' => 'required'
	];

	public function isValid()
	{

		$validation = Validator::make($this->attributes, $this->rules);
		
		if($validation->passes()) return true;

		$this->errors = $validation->messages();
		return false;
	}

	public function projects(){
		return $this->belongsToMany('Review');
	}

	public function home(){
		return $this->belongsTo('Home');
	}
}