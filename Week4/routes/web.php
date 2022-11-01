<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

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





Route::get('/songs', [SongController::class, 'index'])->name('songs.index');


// Route::get('/show/{id}', [SongController::class, 'show']);

Route::get('/songs/create', [SongController::class, 'create']);


Route::get('/songs/{id}', [SongController::class, 'show'])->name('songs.show');

Route::get('/songs/{id}/edit', [SongController::class, 'edit']);
Route::post('/songs', [SongController::class, 'store']);
Route::delete('/songs/{id}', [SongController::class, 'destroy']);
Route::put('/songs/{id}', [SongController::class, 'update']);//->name('update');




