<?php namespace Vestia;

use Illuminate\Database\Eloquent\Model;

class Home extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'homes';

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
	public function owner()
	{
		$this->belongsToMany('Vestia\User','home_owners');
	}

	/**
	 * The home follower relationships
	 *
	 * @return objects(s)
	 */
	public function follwers()
	{
		$this->belongsToMany('Vestia\User','home_followers');
	}

	/**
	 * The home's spaces relationships
	 *
	 * @return object(s)
	 */
	public function spaces()
	{
		$this->hasMany('Vestia\Space');
	}

}
