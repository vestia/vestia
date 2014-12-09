<?php

class HomesController extends \BaseController {

	public function __construct(Home $home){
		$this->home = $home;
		$this->beforeFilter('auth', array('except' => 'show'));
	}

	/**
	 * Display a listing of the resource.
	 * GET /homes
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /homes/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('homes.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /homes
	 *
	 * @return Response
	 */
	public function store()
	{
		$this->home->fill($data = Input::all());

		if(Input::hasFile('cover')){
			$file = Input::file('cover');
			$name = time().'-'.$file->getClientOriginalName();
			$file = $file->move(public_path().'/images/', $name);
			$this->home->cover = $name;
		}

		if(! $this->home->isValid()){
			return Redirect::back()->withInput()->withErrors($this->home->errors);
		}

		$user = Auth::user();
		$home = $user->homes()->save($this->home);

		return Redirect::to('/homes/'.$home->id);
	}

	/**
	 * Display the specified resource.
	 * GET /homes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$home = Home::find($id);

		return View::make('homes.show', ['home' => $home]);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /homes/{id}/edit
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
	 * PUT /homes/{id}
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
	 * DELETE /homes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}