<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return redirect()->route('form');
});

Route::get('/form', [MahasiswaController::class,'form'])->name('form');
Route::post('/simpan', [MahasiswaController::class,'simpan']);
Route::get('/tampil', [MahasiswaController::class,'tampil']);