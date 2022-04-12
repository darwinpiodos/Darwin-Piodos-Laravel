<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;




Route::post('register',[UserController::class,'register']); 
Route::post('login',[UserController::class,'login']); 

Route::post('addproduct',[ProductController::class,'addProduct']); 





Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

