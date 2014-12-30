<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


/*
TODO's:
- doublecheck which routes need auth, there routes that are public here that shouldn't be (user.create, for one, should require auth::guest
*/


//Resourceful routes
Route::resource('users', 'UsersController');
Route::resource('sessions', 'SessionsController');
Route::resource('homes', 'HomesController');
Route::resource('reviews', 'ReviewsController');
Route::resource('projects', 'ProjectsController');

//Authentication required for every request
Route::group(array('before' => 'auth'), function(){
	Route::get('/dash', function(){
		$user = Auth::user();
		return View::make('dash', array('user' => $user));
	});
});

//Some aliases
Route::get('/login', 'SessionsController@create');
Route::get('/signup', 'UsersController@create')->before('guest');
Route::get('/logout', 'SessionsController@destroy');
Route::post('/reviews/create/bid', 'ReviewsController@createBid');

//Splash Page
Route::get('/', function(){
	return View::make('splash');
});