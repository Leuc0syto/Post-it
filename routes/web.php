<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class, 'home'])->name('welcome');

// rutas notes
Route::get('/notes/create', [NoteController::class, 'create'])->name('notes.create');
Route::get('/notes/show', [NoteController::class, 'show'])->name('notes.show');
Route::post('/notes', [NoteController::class, 'store'])->name('notes.store');
//borrar
Route::delete('/notes.show   ', [NoteController::class,'destroy'])->name('notes.destroy');
