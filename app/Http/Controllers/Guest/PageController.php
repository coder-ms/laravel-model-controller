<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){

        return view('home');
    }

    public function getMovies(){
        // $movies = [ 'movies' => ['titolo' => 'titolo 1', 'autore' => 'autore 1', 'data' => 'data 1']];
        //$movies = ['titolo' => 'titolo 1', 'autore' => 'autore 1', 'data' => 'data 1'];
        $movies = Movie::all();
        //dd($movies);
        //DATA DUMP
        //dd(compact('movies')); 

        //return view('pages.movies', $movies); // Puoi mettere al posto di $movies il suo contenuto
        return view('pages.movies', compact('movies'));
    }
}
