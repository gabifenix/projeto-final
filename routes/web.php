<?php

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
    return view('site.home');
})->name('site.home');

Route::get('/cadastro', function () {
    return view('site.register');
})->name('site.register');

Route::get('/filmes-cadastrados', function () {
    return view('site.moviedates');
})->name('site.moviedates');

Route::get('/contato', function () {
    return view('site.contact');
})->name('site.contact');

use App\Http\Controllers\MoviesController;
Route::resource('movies', MoviesController::class);