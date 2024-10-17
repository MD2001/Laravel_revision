<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('Home');
});


Route::get('/jobs', function ()  {   
    $job=Job::with('employer')->latest()->simplePaginate(3);
    return view("jobs.index",[
        'jobs'=>$job
    ]);
});

Route::get('/jobs/create', function () { 
 return view("jobs.create");

});

Route::get('/jobs/{id}', function ($id) {
       $job=Job::find($id);
    return view("jobs.show",["job"=>$job]);

});

Route::get('/contact', function () {
    return view("contact");
});

Route::post('/jobs', function () {  

        Job::create([
        'Title'=>request('Title'),
         'employee_id'=>1,
         'Salary'=>request("Salary"),
     ]);

    return redirect("/jobs");
});