<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class HomeController extends Controller
{
    // Single Action Controller
    public function __invoke()
    {
        //! Diversi modi per leggere dal DB
        // $movies = DB::query('SELECT * from `movies`');
        // $movies = DB::table('movies')->get();
        // $movies = Movie::select('*')->get();
        $movies = Movie::all();

        return view('home', compact('movies'));
    }
}