<?php

namespace App\Http\Controllers;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{

    public function index()
    {
        $job=Job::with('employer')->latest()->simplePaginate(3);
            return view("jobs.index",[
                'jobs'=>$job
            ]);
    }

    public function show(Job $job)
    {
        return view("jobs.show",["job"=>$job]);
    }
    public function edite(Job $job)
    {
        return view("jobs.edit",["job"=>$job]);
    }
    public function delete(Job $job)
    {
    // dd([gettype($id),$id,Job::find($id)]);
    $job->delete();
    return redirect("/jobs");
    }
    public function create()
    {
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
    }
    public function ShowCreate()
    {
        return view("jobs.create");
    }

    public function update(Job $job)
    {
         /**
     * if the validation fall it will reteurn the previouse form and  throw error and will not go to the next line of code
     */
    request()->validate([
        'Title'=>['required','min:3'],
        'Salary'=>['required'],
    ]);

    $job->update([
        'Title'=>request("Title"),
        'Salary'=>request('Salary'),
    ]);
    
    return redirect('/jobs/' . $job->id); //another solution

    // return view("jobs.show",["job"=>Job::find($id)]);
    }
}
