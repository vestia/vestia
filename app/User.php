<?php namespace Vestia;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	/**
	 * The homes the user owners
	 *
	 * @return objects(s)
	 */
	public function owns()
	{
		return $this->belongsToMany('Vestia\Home','home_owners')->withTimestamps();
	}

	/**
	 * The homes the user follows
	 *
	 * @return objects(s)
	 */
	public function follows()
	{
		return $this->belongsToMany('Vestia\Home','home_followers')->withTimestamps();
	}

}
