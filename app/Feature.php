<?php namespace Vestia;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'features';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['home_id', 'user_id', 'photo_id','photo_coords','type','data'];

}
