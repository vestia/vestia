<?php

class SessionsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		if(Auth::check()) return Redirect::to('/dash');
		return View::make('sessions.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		//if the auth attempt is successful
		if(Auth::attempt(Input::only('email','password'))){
			$user =  Auth::user();

			//check if it's an Ajax request and return appropriate response type
			if(Request::ajax()){

				$response = array(
					"error" => false,
					"data"  => '/dash'
				);

				return Response::json($response);

			}else{

				return View::make('dash', ['user' => $user]);
			}
		}

		//if the auth attempt isn't succesful
		if(Request::ajax()){
			
			$response = array(	
					"error" => true,
					"data"  => array('login' => ['Username/password combination is invalid.'])
			);

			return Response::json($response);

		}else{
			return Redirect::back()->withInput();
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
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();
		return Redirect::to('/');
	}


}
