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
    $data = [
        "username" => $username, 
        "note"     => $note
    ];
    return view('welcome', $data);
});
