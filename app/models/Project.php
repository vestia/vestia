<?php

class Project extends \Eloquent {
	protected $fillable = [
		'name',
		'type',
		'category',
		'description',
		'calculated_value',
		'active'
	];

	public $errors;

	public $rules = [
		'name' => 'required',
		'category' => 'required',
		'type' => 'required',
		'description' => 'required'
	];

	public function isValid()
	{

		$validation = Validator::make($this->attributes, $this->rules);
		
		if($validation->passes()) return true;

		$this->errors = $validation->messages();
		return false;
	}

	/**
	 * Get an array of all public projects for use in selectors
	 * Returns an array of id => name pairs to create select input options
	 *
	 * @return array $projectOptions
	 */
	public static function getPublicProjects(){
		
		$publicProjects = Project::where('public','=',1)->get();
		
		$projectOptions = array();

		foreach($publicProjects as $project){

			$projectOptions = $projectOptions + array($project->id => $project->name);
		}

		return $projectOptions;
	}


	public function reviews(){
		return $this->belongsToMany('Review');
	}

	public function homes(){
		return $this->belongsToMany('Home');
	}
}