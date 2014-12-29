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

		if($home->owner->id == Auth::id()){
			//this is the owner of the profile, let's show them the edit view
			return View::make('homes.edit', array('home' => $home));
		}

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
		$home = $this->home->with('projects')->find($id);
		return View::make('homes.edit', array('home' => $home));
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
		$home = Home::find($id)->with('projects');

		$home->fill($data = Input::all());

		if(! $home->isValid()){
			return Redirect::back()->withInput()->withErrors($this->home->errors);
		}

		$home->save();

		return 'success! your home was edited';
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