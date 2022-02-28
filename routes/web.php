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

Route::get('/marouane', function () {
    $nom = "<h2>Marouane</h2>";
    return $nom;
});

Route::get('/{nbr}', function($nbr){
    return view('welcome', compact('nbr'));
});

Route::get('/exo3/{a}/{b}', function($a, $b){
    return view('exo3', compact('a', 'b'));
});