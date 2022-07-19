<?php

use App\Http\Controllers\EpisodesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\SeasonsController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\Autenticador;
use App\Mail\SeriesCreated;
use Illuminate\Support\Facades\Route;

use App\Models\Series;

// Route::get('/', function () {
//     // return view('series.index');
//     return redirect('series.index');
// }); 

// Route::get('/', [SeriesController::class, 'index'])->name('series.index'); 

// Route::get('/', function () {
//     // return view('welcome');
//     return redirect('/series');
// })->middleware('autenticador');


// Route::get('/series', [SeriesController::class, 'index'])->name('series.index');
// Route::post('/series', [SeriesController::class, 'create'])->name('series.create');
// Route::post('/series', [SeriesController::class, 'store'])->name('series.store');
// Route::put('/series/{id}', [SeriesController::class, 'update'])->name('series.update');
// Route::delete('/series/{id}', [SeriesController::class, 'delete'])->name('series.delete');

// Route::middleware('autenticador')->group(function () {
//     Route::get('/', function () { return redirect('/series'); })->middleware('autenticador');
//     Route::get('/series/{series}/seasons', [SeasonsController::class, 'index'])->name('seasons.index');
//     Route::get('/seasons/{season}/episodes', [EpisodesController::class, 'index'])->name('episodes.index');
//     Route::post('/seasons/{season}/episodes', [EpisodesController::class, 'update'])->name('episodes.update');
// });

// Route::resource('/series', SeriesrController::class);
// Route::resource('/series', SeriesController::class)->only(['index', 'create', 'store', 'destroy', 'edit']);
// Route::post('/series', SeriesController::class, 'edit')->name('series.edit');
Route::resource('/series', SeriesController::class)->except(['show']);

Route::get('/series/{series}/seasons', [SeasonsController::class, 'index'])->name('seasons.index')->middleware('autenticador');

Route::get('/seasons/{season}/episodes', [EpisodesController::class, 'index'])->name('episodes.index');
Route::post('/seasons/{season}/episodes', [EpisodesController::class, 'update'])->name('episodes.update');

// Route::get('/login', [LoginController::class, 'index'])->name('login');
// Route::get('/login', [LoginController::class, 'store'])->name('sign');
// Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');

Route::get('/register', [UsersController::class, 'create'])->name('users.create');
Route::post('/register', [UsersController::class, 'store'])->name('users.store');

// Rota de teste para visualização do e-mail a ser enviado
Route::get('/view-email-teste', function () { return new SeriesCreated('1', 'Série Teste', '4', '10'); });
