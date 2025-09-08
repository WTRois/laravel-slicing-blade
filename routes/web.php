<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::resource('user', UserController::class);


