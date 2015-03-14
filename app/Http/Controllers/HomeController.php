<?php namespace App\Http\Controllers;

class HomeController extends Controller {
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$singers = \App\Singer::all();
		return view('home', ['singers' => $singers]);
	}
	public function kengetari($id){
		$singer = \App\Singer::find($id);
		$musics = $singer->musics;
		return view('singer', ['musics'=>$musics, 'singer' => $singer]);
	}
}