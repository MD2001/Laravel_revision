<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});


Route::get('/jobs', function () {
    return view("jobs",[
        "greating" => "Salam",
        "name"=>"mohamed",
        "jobs"=>[
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
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
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

    $job= Arr::first($jobs,fn($job) => $job['id']==$id);  // the way to search of specific element use an anonymous function (closure) to applay filter in search

   
    return view("job",["job"=>$job]);

});

Route::get('/contact', function () {
    return view("contact");
});