<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

   public function categories(){
       return $this -> belongsToMany(Category::class);
    }
 
}
