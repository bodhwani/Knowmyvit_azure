<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Str;
use App\Movies;

use DB;

class MoviesController extends Controller
{
    public function Show_movies()
    {
    	//$movies = DB::table('movies')->get();
    	$movies = Movies::all();
    	return view('templates.review', compact('movies'));
    }
    public function executeSearch()
    {
    	//dd('hit');
    	$keywords = Input::get('keywords');

		$movies = Movies::all();

    	$searchMovies = new \Illuminate\Database\Eloquent\Collection();

    	foreach($movies as $movie)
    	{
    		dd('working in fucntion');
    		if(Str::contains(Str::lower($movie->text), Str::lower($keywords)))
    		{
    			dd('working in if');
    			$searchMovies->add($movie);
    		}
    		else
    		{
    			dd('not working');
    		}
    	}
    	return view('searchMovies',compact('searchMovies'));
    }
}
