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
		$home_id = Input::get('home_id');
		$home = Home::find($home_id);
		return View::make('reviews.create', array('home' => $home));
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

		return 'thanks for the bid';
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
		//
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