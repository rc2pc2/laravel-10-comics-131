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
    $comics = config("db");
    // dd($comics);

    return view('comics.index', compact("comics")); // # dove si trova il file  [ "comics" => $comics ]
})->name("comics.index"); // % nome che assegno alla rotta


// Route::get('/comics/{id}', function (string $id) { // > l'indirizzo a cui il visitatore deve arrivare per accedere a queste risorse
//     dd($id);

//     return view('comics.index', compact("comics")); // # dove si trova il file  [ "comics" => $comics ]
// })->name("comics.index"); // % nome che assegno alla rotta


//


// # Creo una nuova rotta
// % Quale metodo HTTP voglio ascoltare quando devo gestire questo comportamento?
Route::get("/comics/{index}", function( string $index ){
    $comics = config('db');
    // dd($index);
    if (isset($comics[$index])){

        // < Prendo il singolo elemento interessato
        $comic = $comics[$index];
        // dd($comic);

        // > Mostro l'elemento:
            // # devo ritornare la view a cui passo l'elemento recuperato
        return view("comics.show", compact("comic"));
    } else {
        //  * mostro una pagina di errore relativa
        //  * 404 not found
        abort(404);
    }
})->name("comics.show");
