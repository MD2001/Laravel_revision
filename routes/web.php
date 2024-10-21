<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::view('/','Home');

Route::get('/jobs',[JobController::class,'index']);
Route::get('/jobs/create',[JobController::class,"ShowCreate"]);
Route::get('/jobs/{job}',[JobController::class,"show"]);
Route::post('/jobs',[JobController::class,'create']);
Route::get('/jobs/{job}/edit',[JobController::class,'edite']);
Route::patch('/jobs/{job}',[JobController::class,'update']);
Route::delete('/jobs/{job}',[JobController::class,'delete']);

Route::view('/contact','contact');