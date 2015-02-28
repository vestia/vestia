<?php namespace Vestia;

use Illuminate\Database\Eloquent\Model;

class Estimate extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'estimates';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['review_id','median_psf_percent_delta','calculated_time_of_estimate_value','calculated_current_value'];

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
