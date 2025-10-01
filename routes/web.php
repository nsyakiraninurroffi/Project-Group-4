<?php
use App\Http\Controllers\BukuTamuController;

use Illuminate\Support\Facades\Route;

Route::get('/buku-tamu',[BukuTamuController::class, 'index']);
Route::post('/buku-tamu',[BukuTamuController::class, 'store'])->name('bukutamu.store');
