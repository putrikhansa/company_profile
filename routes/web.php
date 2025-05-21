<?php
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\UkmController;
use App\Http\Controllers\FotoFasilitasController;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// frontend
Route::get('/dosen', [FrontController::class, 'dosen']);
Route::get('/tentang', [FrontController::class, 'tentang']);
Route::get('/artikel', [FrontController::class, 'artikel']);
Route::get('/fakultas', [FrontController::class, 'fakultas']);
Route::get('/prestasi', [FrontController::class, 'prestasi']);
Route::get('/fasilitas', [FrontController::class, 'fasilitas']);
Route::get('/ukm', [FrontController::class, 'ukm']);

Route::get('/', [FrontController::class, 'index'])->name('welcome');
Route::get('/detail/{id}', [FrontController::class, 'show'])->name('detail');

// admin
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('artikel', ArtikelController::class);
    Route::resource('fasilitas', FasilitasController::class);
    Route::resource('fakultas', FakultasController::class);
    Route::resource('ukm', UkmController::class);
    Route::resource('dosen', DosenController::class);
    Route::resource('prestasi', PrestasiController::class);
    Route::resource('fotofasilitas', FotoFasilitasController::class);

});
