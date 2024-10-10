<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    /*this line used to tell eloquent model that this class refrence the jobs_listing table in data base 
    without change the name of the class to the name of table in database  */
  protected $table="jobs_listing";  

  /*this line tell the eloquent class to allow mass updata to coulmns title and slary only and ignore any thing else  */
  protected $fillable = ['Title','Salary'];
}