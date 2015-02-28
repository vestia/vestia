<?php namespace Vestia;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'comments';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['review_id','text'];

	/**
	 * The comment home relationships
	 *
	 * @return objects(s)
	 */
	public function review()
	{
		$this->belongsTo('Vestia\Review');
	}

}
