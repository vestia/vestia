<?php

class Home extends \Eloquent {
	
	public $errors;

	public $rules = [
		'street' => 'required',
		'city' => 'required',
		'zipcode' => 'required'
	];

	/**
	 * The fields in the table that can be mass-assigned.
	 *
	 * @var string
	 */
	protected $fillable = array(
		'name',
		'street',
		'unit',
		'city',
		'zipcode',
		'user_id',
		'description',
		'bedrooms',
		'bathrooms',
		'sqft',
		'lot_size',
		'initial_bid',
		'cover'
	);

	public function isValid()
	{

		$validation = Validator::make($this->attributes, $this->rules);
		
		if($validation->passes()) return true;

		$this->errors = $validation->messages();
		return false;
	}

	public function owner()
	{
		return $this->belongsTo('User');
	}

	public function reviews()
	{
		return $this->hasMany('Review');
	}

}