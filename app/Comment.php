<?php

namespace Blogs;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /// relationship with Post model
    public function post() 
    {
        return $this->belongsTo(Post::class);
    }
   
}
