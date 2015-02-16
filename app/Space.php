<?php namespace Vestia;

use Illuminate\Database\Eloquent\Model;

class Space extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'spaces';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['home_id', 'type', 'name'];

	/**
	 * The home owner relationships
	 *
	 * @return object(s)
	 */
	public function home()
	{
		$this->belongsTo('Vestia\Home');
	}

}
