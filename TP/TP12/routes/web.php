<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;

Route::get('/', [PegawaiController::class, 'index'])->name('home');
Route::get('/create', [PegawaiController::class, 'createView'])->name('pegawai.createView');
Route::post('/create', [PegawaiController::class, 'create'])->name('pegawai.create');
