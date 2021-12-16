<?php

use App\Http\Controllers\VideogamesController;
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
    return view('welcome');
});
Route::get('/videogames', [VideogamesController::class, 'index']);

Route::get('/videogames/{id}', [VideogamesController::class, 'show']) -> where('id', '[0-9]+');

// Route::get('/videogames/{id}', function($id)  {
//     return "Videogames $id";
// }) -> where('id', '[0-9]+');

Route::get('/videogames/new', function()  {
    return "Videogames lalala";
});