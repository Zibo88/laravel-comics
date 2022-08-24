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

// 1) creo la route per la pagina home
Route::get('/home', function () {
    return view('home');
});

// 2)creo la route per la pagina comics_poster
Route::get('/poster', function (){
    return view('comics_poster');
})->name('poster');
