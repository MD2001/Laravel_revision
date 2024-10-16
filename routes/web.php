<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

$jobs=[
    [
        "id"=>1,
        "Title"=>"Doctor"
        ,"Salary"=>"50,000$"
    ],
    [
        "id"=>2,
        "Title"=>"Programmer"
        ,"Salary"=>"10,000$"
    ],
    [
        "id"=>3,
        "Title"=>"Teacher"
        ,"Salary"=>"40,000$"
    ]
    ];

Route::get('/', function () {
    return view('Home');
});


Route::get('/jobs', function ()  {   
    $job=Job::with('employer')->simplePaginate(3);
    return view("jobs",[
        'jobs'=>$job
    ]);
});

Route::get('/jobs/{id}', function ($id) {
       $job=Job::find($id);
    return view("job",["job"=>$job]);

});

Route::get('/contact', function () {
    return view("contact");
});