<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::view('/','Home');    //this only for static view which just read the url and redirect to specific page

Route::view('/contact','contact');

Route::controller(JobController::class)->group(function()
{
    Route::get('/jobs','index');
    Route::get('/jobs/create',"ShowCreate");
    Route::get('/jobs/{job}',"show");
    Route::post('/jobs','create');
    Route::get('/jobs/{job}/edit','edite');
    Route::patch('/jobs/{job}','update');
    Route::delete('/jobs/{job}','delete');

});