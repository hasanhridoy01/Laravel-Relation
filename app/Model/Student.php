<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];

    public function courses()
    {
    	return $this -> belongsToMany(Course::class);
    }
}
