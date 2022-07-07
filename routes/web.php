<?php

use App\Http\Controllers\EpisodesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\SeasonsController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\Autenticador;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return redirect('/series');
})->middleware('autenticador');

// Route::middleware('autenticador')->group(function () {
//     Route::get('/', function () { return redirect('/series'); })->middleware('autenticador');
//     Route::get('/series/{series}/seasons', [SeasonsController::class, 'index'])->name('seasons.index');
//     Route::get('/seasons/{season}/episodes', [EpisodesController::class, 'index'])->name('episodes.index');
//     Route::post('/seasons/{season}/episodes', [EpisodesController::class, 'update'])->name('episodes.update');
// });

// Route::resource('/series', SeriesrController::class);
// Route::resource('/series', SeriesController::class)->only(['index', 'create', 'store', 'destroy', 'edit']);
Route::resource('/series', SeriesController::class)->except(['show']);

Route::get('/series/{series}/seasons', [SeasonsController::class, 'index'])->name('seasons.index')->middleware('autenticador');

Route::get('/seasons/{season}/episodes', [EpisodesController::class, 'index'])->name('episodes.index');
Route::post('/seasons/{season}/episodes', [EpisodesController::class, 'update'])->name('episodes.update');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/login', [LoginController::class, 'store'])->name('sign');
Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');

Route::get('/register', [UsersController::class, 'create'])->name('users.create');
Route::post('/register', [UsersController::class, 'store'])->name('users.store');


