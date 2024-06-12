<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    $data = ['nama' => "herlita", 'foto' =>'herlita.jpg'];
    return view('dashboard' , compact('data'));
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

// Route::get('/prodi', [ProdiController::class, 'index']);
// Route::get('/prodi/create', [ProdiController::class, 'create']);
// Route::post('/prodi', [ProdiController::class, 'store']);

Route::resource('/prodi', ProdiController::class);
Route::resource('/mahasiswa', MahasiswaController::class);
