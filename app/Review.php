<?php namespace Vestia;

use Illuminate\Database\Eloquent\Model;

class Review extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'reviews';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['home_id', 'user_id', 'project_id','estimate_id','comment_id'];

	/**
	 * The review's home relationship
	 *
	 * @return objects(s)
	 */
	public function home()
	{
		$this->belongsTo('Vestia\Home');
	}

	/**
	 * The review's author relationship
	 *
	 * @return objects(s)
	 */
	public function user()
	{
		$this->belongsTo('Vestia\User');
	}

	/**
	 * The review's estimate relationship
	 *
	 * @return objects(s)
	 */
	public function estimate()
	{
		return $this->hasOne('Vestia\Estimate');
	}

	/**
	 * The review's project relationship
	 *
	 * @return objects(s)
	 */
	public function project()
	{
		return $this->hasOne('Vestia\Project');
	}

	/**
	 * The review's comment relationship
	 *
	 * @return objects(s)
	 */
	public function comment()
	{
		return $this->hasOne('Vestia\Comment');
	}
}
