<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return redirect()->route('home');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/struktur', [HomeController::class, 'struktur'])->name('struktur');
Route::get('/divisi', [HomeController::class, 'divisi'])->name('divisi');
Route::get('/kegiatan', [HomeController::class, 'kegiatan'])->name('kegiatan');
