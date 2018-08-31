<?php

namespace Blogs\Http\Controllers;

use Illuminate\Http\Request;
use Blogs\blog_copy;
class editPostsController extends Controller
{
    public function showPost()
    {
        return view('/posts/edit-post');
    }
    public function store()
    {
        $bc = new blog_copy;
        $bc->b_title = request('p_title');
        $bc->b_body = request('p_body');
        
        $bc->save();
    }
}
