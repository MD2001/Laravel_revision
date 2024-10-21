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

    // dd([gettype($id),$id,Job::find($id)]);
    return view("jobs.show",["job"=>Job::find($id)]);
});

Route::get('/contact', function () {
    return view("contact");
});

Route::post('/jobs', function () {  

    /**
     * if the validation fall it will reteurn the previouse form and  throw error and will not go to the next line of code
     */
        request()->validate([
            'Title'=>['required','min:3'],
            'Salary'=>['required'],
        ]);

        Job::create([
        'Title'=>request('Title'),
         'employee_id'=>1,
         'Salary'=>request("Salary"),
     ]);

    return redirect("/jobs");
});

//edite
Route::get('/jobs/{id}/edit', function ($id) {
    $job=Job::find($id);
 return view("jobs.edit",["job"=>$job]);

});

//Update
Route::patch('/jobs/{id}', function ($id) {
   
   /**
     * if the validation fall it will reteurn the previouse form and  throw error and will not go to the next line of code
     */
    request()->validate([
        'Title'=>['required','min:3'],
        'Salary'=>['required'],
    ]);

    $job=Job::findOrFail($id);

    $job->update([
        'Title'=>request("Title"),
        'Salary'=>request('Salary'),
    ]);
    
    return redirect('/jobs/' . $job->id); //another solution

    // return view("jobs.show",["job"=>Job::find($id)]);
});

//Delete
Route::delete('/jobs/{id}', function ($id) {
    // dd([gettype($id),$id,Job::find($id)]);
    Job::findOrFail($id)->delete();

    return redirect("/jobs");

});