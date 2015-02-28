<?php namespace Vestia;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Home extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'homes';

	/**
	 * A variable to hold our errors
	 */
	public $errors;

	/**
	 * Validation rules for homes. Used in the isValid() method.
	 *
	 */
	public $rules = [
		'street' => 'required',
		'city' => 'required',
		'zipcode' => 'required',
	];

	/**
	 * 
	 * Method that determines whether or not a home's data is valid.
	 *
	 * @return bool
	 */
	public function isValid()
	{

		$validation = Validator::make($this->attributes, $this->rules);
		
		if($validation->passes()) return true;

		$this->errors = $validation->messages();
		return false;
	}


	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'street', 'unit','zipcode','owner_estimate','private'];

	/**
	 * The home owner relationships
	 *
	 * @return object(s)
	 */
	public function owners()
	{
		return $this->belongsToMany('Vestia\User','home_owners')->withTimestamps();
	}

	/**
	 * The home follower relationships
	 *
	 * @return objects(s)
	 */
	public function followers()
	{
		return $this->belongsToMany('Vestia\User','home_followers')->withTimestamps();
	}

	/**
	 * The home's spaces relationships
	 *
	 * @return object(s)
	 */
	public function spaces()
	{
		return $this->hasMany('Vestia\Space');
	}

	/**
	 * The home's feature relationships
	 *
	 * @return object(s)
	 */
	public function features()
	{
		return $this->hasMany('Vestia\Feature');
	}

	/**
	 * The home's update relationships
	 *
	 * @return object(s)
	 */
	public function updates()
	{
		return $this->hasMany('Vestia\Update');
	}

	/**
	 * The home's update relationships
	 *
	 * @return object(s)
	 */
	public function reviews()
	{
		return $this->hasMany('Vestia\Review');
	}

}
