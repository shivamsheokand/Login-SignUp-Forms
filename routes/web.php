<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/signup',[UserController::class,'signUp']);
Route::post('/signup',[UserController::class,'signForm']);

Route::get('/login',[UserController::class,'login']);
Route::post('/login',[UserController::class,'loginForm']);
