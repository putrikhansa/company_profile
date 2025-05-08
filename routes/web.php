<?php
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\UkmController;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// frontend
Route::get('/dosen', [FrontController::class, 'dosen']);
Route::get('/about', [FrontController::class, 'about']);
Route::get('/artikel', [FrontController::class, 'artikel']);
Route::get('/', [FrontController::class, 'index'])->name('welcome');

// admin
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('artikel', ArtikelController::class);
    Route::resource('fasilitas', FasilitasController::class);
    Route::resource('fakultas', FakultasController::class);
    Route::resource('ukm', UkmController::class);
    Route::resource('dosen', DosenController::class);

});
