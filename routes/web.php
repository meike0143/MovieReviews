<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// (Protected) routes for the movies CRUD module
Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
Route::get('/movies/create', [MovieController::class, 'create'])
    ->middleware('auth')->name('movies.create');
Route::post('/movies', [MovieController::class, 'store'])
    ->middleware('auth')->name('movies.store');
Route::get('/movies/{movie}', [MovieController::class, 'show'])->name('movies.show');
Route::get('/movies/{movie}/edit', [MovieController::class, 'edit'])
    ->middleware('auth')->name('movies.edit');
Route::patch('/movies/{movie}', [MovieController::class, 'update'])
    ->middleware('auth')->name('movies.update');
Route::delete('/movies/{movie}', [MovieController::class, 'destroy'])
    ->middleware('auth')->name('movies.destroy');
Route::get('movies/{movie}/delete', [MovieController::class,'delete'])
    ->middleware('auth')->name('movies.delete');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
