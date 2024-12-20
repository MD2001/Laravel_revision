<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    /** @use HasFactory<\Database\Factories\EmployeeFactory> */
    use HasFactory;

    protected $fillable=['first_name','last_name'];

    public function job()
    {
        return $this->hasMany(Job::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
