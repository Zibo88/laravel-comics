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
    // creo una variabile che conterrà i dati necessari
    $comics_array = config('comics');

    // creo l'array associativo che verrà utilizzato nella pagina home
    $data = [
        'comics_array' => $comics_array,
    ];
    // invio come parametro i data
    return view('home', $data);
})->name('home');

// 2)creo la route per la pagina comics_poster
// Per permettere di collegare l'id alla selezione dell'utente, inseriamo /{id} come argomento e poi lo riutilizziamo come variabile all'interno di funtion
Route::get('/poster/{id}', function ($id){
    // controlliamo il valore di $id
    // dd($id);
    $comics_array = config('comics');

    // creo un array vuoto
    $current_comics = [];

    // avvio un ciclo foreach per analizzare ogni singolo elemento all'interno di $comics_array
    foreach($comics_array as $single_comics){
      if($single_comics['id'] == $id){
          $current_comics[] = $single_comics;
      }
    };
    
    $data = [
        'current_comics' => $current_comics
    ];
    return view('comics_poster',$data);
})->name('poster');
