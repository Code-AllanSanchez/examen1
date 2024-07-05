<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\directoriosController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/directorio', [directoriosController::class,'mostrarDirectorios']);