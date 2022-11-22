<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Public Api
//Route::get('/students',[StudentController::class,'index']);
// Route::get('/student/{id}',[StudentController::class,'show']);
// Route::post('/students',[StudentController::class,'store']);
// Route::put('/student/{id}',[StudentController::class,'update']);
// Route::delete('/student/{id}',[StudentController::class,'destroy']);
// Route::get('/student/search/{city}',[StudentController::class,'search']);

 Route::post('/register',[UserController::class,'register']);

//Protected Api

  //Route::middleware('auth:sanctum')->get('/students',[StudentController::class,'index']);

  Route::middleware('auth:sanctum')->group(function(){

    Route::get('/students',[StudentController::class,'index']);
    Route::get('/student/{id}',[StudentController::class,'show']);
    Route::post('/students',[StudentController::class,'store']);
    Route::put('/student/{id}',[StudentController::class,'update']);
    Route::delete('/student/{id}',[StudentController::class,'destroy']);
    Route::get('/student/search/{city}',[StudentController::class,'search']);
  });



