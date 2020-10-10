<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];

     public function students()
    {
    	return $this -> belongsToMany(Student::class);
    }
   

}
