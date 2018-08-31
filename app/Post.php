<?php

namespace Blogs;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public static function store()
    {   
 
    }
     public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
