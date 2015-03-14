<?php namespace App\Http\Controllers;

class GuestController extends Controller {
	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/
	
	public function index()
	{
		$singers = \App\Singer::all();
		return view('home', ['singers' => $singers]);
	}
	
}