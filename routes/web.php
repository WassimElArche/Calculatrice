<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NombreController;

Route::get('/test', function () {
    return view('welcome');
});

Route::post('/test',[NombreController::class,'operation']);


