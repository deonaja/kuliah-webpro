<?php

use App\Http\Controllers\TugasPendahuluanController;
use App\Models\TugasPendahuluan;
use Illuminate\Support\Facades\Route;

Route::resource('tugasPendahuluans', TugasPendahuluanController::class);

Route::get('/', function () {
    return redirect()->route('tugasPendahuluans.index');
});
