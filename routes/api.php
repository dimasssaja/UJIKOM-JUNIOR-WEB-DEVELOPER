<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\PegawaiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Mendefinisikan grup rute dengan prefix 'api.'
Route::group(['as'=>'api.'], function(){
    // Mengabaikan metode 'create' dan 'edit' karena tidak diperlukan
    Route::resource('user', UserController::class)
        ->except(['create','edit']);
});

// Mendefinisikan grup rute dengan prefix 'pgw.'
Route::group(['as'=>'pgw.'], function(){
    Route::resource('pegawai', PegawaiController::class)
        ->except(['create','edit']);
});
