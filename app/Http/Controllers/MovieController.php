<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    // Single Action Controller
    public function show($id)
    {
        //! Diversi modi per leggere dal DB
        // $movies = DB::query('SELECT * from `movies`');
        // $movies = DB::table('movies')->get();
        // $movies = Movie::select('*')->get();
        $movie = Movie::whereId($id)->first();

        return view('movies.show', compact('movie'));
    }
}