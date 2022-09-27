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
    $fumetti = config('comics');
    return view('homepage', [
        'fumetti' => $fumetti
    ]);
})->name('homepage');

Route::get('comics/{id}', function($id) {
    $fumetti = config('comics');
    $singoloFumetto = $fumetti[$id];
    return view('comics', ['fumetto' => $singoloFumetto]);
})->name('comics');

Route::get('/shop', function() {
    $fumetti = config('comics');
    return view('shop', [
        'fumetti' => $fumetti
    ]);
})->name('shop');

Route::get('/tv', function(){
    return view('tv');
})->name('tv');

Route::get('/movies', function(){
    return view('movies');
})->name('movies');