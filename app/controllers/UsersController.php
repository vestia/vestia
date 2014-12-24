<?php

class UsersController extends \BaseController {

	public function __construct(User $user){
		$this->user = $user;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();
		return View::make('users.index', ['users' => $users]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$this->user->fill($data = Input::all());


		if(! $this->user->isValid()){

			if(Request::ajax()){
				$response = array(
					"error" => true,
					"data"  => $this->user->errors //Instance of MessageBag object
				);
				return Response::json($response);
			}else{
				return Redirect::back()->withInput()->withErrors($this->user->errors);
			}
		}

		$user = new User;
		$user->first_name = Input::get('first_name');
		$user->last_name = Input::get('last_name');
		$user->zipcode = Input::get('zipcode');
		$user->email = Input::get('email');
		$user->password = Hash::make(Input::get('password'));
		$user->save();

		Auth::login($user);

		if(Request::ajax()){
			$response = array(
				"error" => false,
				"data"  => '/dash'
			);
			return Response::json($response);

		}else{
			return Redirect::to('/dash');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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

