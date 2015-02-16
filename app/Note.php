<?php namespace Vestia;

use Illuminate\Database\Eloquent\Model;

class Note extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'notes';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['home_id', 'user_id', 'project_id','estimate_id','comment_id'];

	/**
	 * The note's home relationship
	 *
	 * @return objects(s)
	 */
	public function home()
	{
		$this->belongsTo('Vestia\Home');
	}

	/**
	 * The note's author relationship
	 *
	 * @return objects(s)
	 */
	public function user()
	{
		$this->belongsTo('Vestia\User');
	}

	/**
	 * The note's estimate relationship
	 *
	 * @return objects(s)
	 */
	public function estimate()
	{
		$this->hasOne('Vestia\Estimate');
	}

	/**
	 * The note's project relationship
	 *
	 * @return objects(s)
	 */
	public function project()
	{
		$this->hasOne('Vestia\Project');
	}

	/**
	 * The note's comment relationship
	 *
	 * @return objects(s)
	 */
	public function comment()
	{
		$this->hasOne('Vestia\Comment');
	}
}
