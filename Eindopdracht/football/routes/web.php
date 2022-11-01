<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubsController;
use App\Http\Controllers\PlayersController;

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


Route::get('/clubs', [ClubsController::class, 'index'])->name('clubs.index');
Route::get('/clubs/create', [ClubsController::class, 'create'])->name('clubs.create');
Route::get('/clubs/{id}', [ClubsController::class, 'show'])->name('clubs.show');
Route::get('/clubs/{id}/edit', [ClubsController::class, 'edit'])->name('clubs.edit');
Route::post('/clubs', [ClubsController::class, 'store']);
Route::delete('/clubs/{id}', [ClubsController::class, 'destroy']);
Route::put('/clubs/{id}', [ClubsController::class, 'update']);//->name('update');






Route::get('/players', [PlayersController::class, 'index'])->name('players.index');
Route::get('/players/create', [PlayersController::class, 'create'])->name('players.create');
Route::get('/players/{id}', [PlayersController::class, 'show'])->name('players.show');
Route::get('/players/{id}/edit', [PlayersController::class, 'edit'])->name('players.edit');
Route::post('/players', [PlayersController::class, 'store']);
Route::delete('/players/{id}', [PlayersController::class, 'destroy']);
Route::put('/players/{id}', [PlayersController::class, 'update']);//->name('update');
