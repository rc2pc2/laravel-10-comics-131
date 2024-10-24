<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
})->name("home-page");



Route::get('/about', function () {
    return view('pages.about');
})->name("about-page");


Route::get('/comics', function () { // > l'indirizzo a cui il visitatore deve arrivare per accedere a queste risorse

    //< recuperare i miei dati
    $comics = [];
    // dd($comics);

    return view('comics.index', compact("comics")); // # dove si trova il file  [ "comics" => $comics ]
})->name("comics.index"); // % nome che assegno alla rotta


Route::get('/comics/{id}', function (string $id) { // > l'indirizzo a cui il visitatore deve arrivare per accedere a queste risorse

    // //< recuperare i miei dati
    // $comics = [];
    dd($id);

    return view('comics.index', compact("comics")); // # dove si trova il file  [ "comics" => $comics ]
})->name("comics.index"); // % nome che assegno alla rotta
