<?php namespace Vestia;

use Illuminate\Database\Eloquent\Model;

class Project extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'projects';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['home_id', 'user_id', 'space_id','name','type','description'];

}
