<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model

{
  use HasFactory;
    /*this line used to tell eloquent model that this class refrence the jobs_listing table in data base 
    without change the name of the class to the name of table in database  */
  protected $table="jobs_listings";  

  /*this line tell the eloquent class to allow mass updata to coulmns title and slary only and ignore any thing else  */
  /*the oppist of the $fillable is gurded */
  protected $fillable = ["employee_id",'Title','Salary'];
  

  public function employer()
  {
    /*for not clear reason it need the $foreignKey to show the realtionship in tinker -at lest for now-  */
    return $this->belongsTo(Employee::class,"employee_id");
  }

  public function tags()
  {
    /*tell laravel that the key tha looking for not the defult one but is <jobs_listings_id> */
    return $this->belongsToMany(Tag::class,foreignPivotKey:'jobs_listings_id');
  }

}