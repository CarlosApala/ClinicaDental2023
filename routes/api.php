<?php

use App\Http\Controllers\DiaAtencionController;
use App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::get('/dia',[DiaAtencionController::class,'index']);
Route::post('/login',[LoginController::class,'loginUser']);

