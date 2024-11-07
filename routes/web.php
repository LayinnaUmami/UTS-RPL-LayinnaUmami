<?php
use App\Http\Controllers\HewanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rute untuk mengelola data Hewan
Route::get('/hewans', [HewanController::class, 'index'])->name('hewans.index');
Route::get('/hewan/create', [HewanController::class, 'create'])->name('hewan.create');
Route::post('/hewan', [HewanController::class, 'store'])->name('hewan.store');
Route::get('/hewan/{hewan}/edit', [HewanController::class, 'edit'])->name('hewan.edit');
Route::put('/hewans/{id}', [HewanController::class, 'update'])->name('hewans.update');
Route::resource('hewans', HewanController::class);