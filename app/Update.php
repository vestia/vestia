<?php namespace Vestia;

use Illuminate\Database\Eloquent\Model;

class Update extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'updates';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['home_id', 'user_id', 'type','headline','description'];

	/**
	 * The update's home relationship
	 *
	 * @return objects(s)
	 */
	public function home()
	{
		return $this->belongsTo('Vestia\Home');
	}

	/**
	 * The update's user relationship
	 *
	 * @return objects(s)
	 */
	public function user()
	{
		return $this->belongsTo('Vestia\User');
	}

	/**
	 * The update's photo relationships
	 *
	 * @return object(s)
	 */
	public function photos()
	{
		 return $this->morphMany('Vestia\Photo', 'imageable');
	}

}
