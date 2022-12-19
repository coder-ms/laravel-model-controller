<?php
//use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/movies', function () {
    $movies = ['titolo' => 'titolo 1', 'autore' => 'autore 1', 'data' => 'data 1'];
    //DATA DUMP
    //dd(compact('movies')); 
    return view('pages.movies',  compact('movies'));
});

/*
function () {
    return view('home');
}
*/