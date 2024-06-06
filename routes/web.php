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
    $username = "Loris";
    $note = "A quando per un nuovo escape code :)";
    $ps = "E si luca, l' abbiamo battuto in 30min (Grazie a Sabino, senza di lui saremmo ancora qua a cercare una soluzione)";
    $data = [
        "username" => $username, 
        "note"     => $note,
        "ps"        => $ps
    ];
    return view('welcome', $data);
});
