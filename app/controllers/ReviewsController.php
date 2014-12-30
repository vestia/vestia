<?php

class ReviewsController extends \BaseController {

	public function __construct(Review $review){
		$this->review = $review;
		$this->beforeFilter('auth', array('except' => 'show'));
	}
	/**
	 * Display a listing of the resource.
	 * GET /reviews
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /reviews/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Insert a new bid form into the home profile
	 * POST /reviews/create/bid
	 *
	 * @return Response
	 */
	public function createBid()
	{
		$home_id = Input::get('home_id');
		$home = Home::find($home_id);
		return View::make('reviews.bid', array('home' => $home));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /reviews
	 *
	 * @return Response
	 */
	public function store()
	{
		
		$data = Input::all();

		$this->review->fill($data);
		$this->review->user_id = Auth::id();

		if(! $this->review->isValid()){
			return Redirect::back()->withInput()->withErrors($this->review->errors);
		}

		$review = $this->review->save();

		return View::make('reviews.project', array('review' => $this->review));
	}

	/**
	 * Display the specified resource.
	 * GET /reviews/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$review = Review::find($id);

		return $review;
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /reviews/{id}/edit
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
	 * PUT /reviews/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$review = Review::find($id);
	
		$review->project_id = Input::get('project_id');

		if(! $review->isValid()){
			//return Redirect::back()->withInput()->withErrors($this->review->errors);
			return 'error';
		}

		$review->save();

		return 'review updated!';
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /reviews/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}