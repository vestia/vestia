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
	public function notes()
	{
		return $this->hasMany('Vestia\Note');
	}

}
