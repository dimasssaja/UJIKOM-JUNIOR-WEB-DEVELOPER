<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\PegawaiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['as'=>'api.'], function(){
    Route::resource('user', UserController::class)
        ->except(['create','edit']);
});

Route::group(['as'=>'pgw.'], function(){
    Route::resource('pegawai', PegawaiController::class)
        ->except(['create','edit']);
});
