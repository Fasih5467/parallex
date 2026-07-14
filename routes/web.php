<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\ServiceController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/services', [ServiceController::class, 'index']);
