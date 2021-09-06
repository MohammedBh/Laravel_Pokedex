<?php

use App\Http\Controllers\PokemonController;
use App\Http\Controllers\TypeController;
use App\Models\Pokemon;
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

//WELCOME
Route::get('/', function () {
    $pokemons = Pokemon::all();
    $count = Pokemon::all()->count();
    return view('welcome', compact('pokemons', 'count'));
});

//POKEMON
Route::get('/add-new', [PokemonController::class, 'index']);
Route::resource('pokemon', PokemonController::class);

//TYPE
Route::get('/add-type', [TypeController::class, 'index']);
Route::resource('type', TypeController::class);