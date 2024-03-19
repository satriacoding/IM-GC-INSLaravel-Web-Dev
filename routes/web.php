<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CastController;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});



Route::resource('casts', CastController::class);