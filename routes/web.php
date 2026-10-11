<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/anggota/create', [AnggotaController::class, 'create'])
    ->name('anggota.create');

Route::post('/anggota', [AnggotaController::class, 'store'])
    ->name('anggota.store');
