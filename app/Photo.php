<?php namespace Vestia;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'photos';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['small_url', 'medium_url', 'large_url','original_url','imageable_id','imageable_type'];

	/**
	 * The photo's parent relationship
	 *
	 * @return objects(s)
	 */
	public function imageable()
	{
		return $this->morphTo();
	}

	/**
	 * The photo's tagged features
	 *
	 * @return object(s)
	 */
	public function features()
	{
		return $this->hasMany('Vestia\Feature');
	}

}
