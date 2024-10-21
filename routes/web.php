<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('Home');
});

//Job::index
Route::get('/jobs',[JobController::class,'index']);
//Job:create.show
Route::get('/jobs/create',[JobController::class,"ShowCreate"]);
//Job::show
Route::get('/jobs/{job}',[JobController::class,"show"]);
//Job::create
Route::post('/jobs',[JobController::class,'create']);
//Job::edite
Route::get('/jobs/{job}/edit',[JobController::class,'edite']);
//Job::Update
Route::patch('/jobs/{job}',[JobController::class,'update']);
//Job::Delete
Route::delete('/jobs/{job}',[JobController::class,'delete']);

Route::get('/contact', function () {
    return view("contact");
});