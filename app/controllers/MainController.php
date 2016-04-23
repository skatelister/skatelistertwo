<?php

class MainController extends \BaseController {

	public function home() 
	{	
		$posts = Post::all();
		return View::make('sections.home', ['posts' => $posts]);
	}


}
