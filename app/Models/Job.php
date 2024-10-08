<?php
namespace App\Models;

use Illuminate\Support\Arr;
class Job
{
    public static  function all(): array
    {
       return [
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
            ],
            [
                "id"=>4,
                "Title"=>"Enginering"
                ,"Salary"=>"80,000$"
            ]
            ];
    }

    public static function find(int $id) :array
    {
        $job=Arr::first(Job::all(),fn($job) => $job['id']==$id);// the way to search of specific element use an anonymous function (closure) to applay filter in search
        if(!$job)
        {
            abort(404);
        }
        else
        {
            return $job;
        }
          
    }
}