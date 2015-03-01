<?php namespace Vestia\Http\Controllers;

use Vestia\Http\Requests;
use Vestia\Http\Controllers\Controller;
use Vestia\Home;
use Vestia\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use PragmaRX\ZipCode\Contracts\ZipCode;

class HomesController extends Controller {

	public function __construct(Home $home){
		$this->home = $home;
		//$this->beforeFilter('auth', array('except' => 'show'));
	}

	/**
	 * Display a listing of the resource.
	 * /homes/
	 *
	 * @return Response
	 */
	public function index()
	{
		return Home::with('spaces','owners','followers','updates','reviews')->get(); 
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ZipCode $zipcode)
	{
		//Get location from zip
		$zipcode->setCountry('US');
		$location = $zipcode->find(Input::get('zipcode'))->toArray();

		//Fill out the home's data
		$this->home->fill($data = Input::all());
		$this->home->city = $location['addresses'][0]['place'];
		$this->home->name = Input::get('street');

		//If the home isn't valid
		if(! $this->home->isValid()){

			$response = Response::json([
				"error" => true,
				"data" => $this->home->errors
			], 500);

			return $response;
		}

		//If the home is valid
		$user = User::find(1);
		$home = $user->owns()->save($this->home);

		$response = Response::json([
				"error" => false,
				"data" => $home
			], 200);

		return $response;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return $this->home = Home::with('spaces','owners','followers','updates','reviews')->find($id);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$home = Home::find($id);

		print_r($home);
		
		echo '<hr>';

		foreach(Input::all() as $input=>$value){
			$home->$input = $value;
		}

		if(! $home->isValid()){

			$response = Response::json([
				"error" => true,
				"data" => $home->errors
			], 500);

			return $response;
		}

		//If the home is valid
		$home->save();

		$response = Response::json([
				"error" => false,
				"data" => $home
			], 200);

		return $response;

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
