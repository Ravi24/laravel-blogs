<?php

namespace Blogs\Http\Controllers;

use Illuminate\Http\Request;
use Blogs\Comment;
use Blogs\Post;
class CommentsController extends Controller
{
    public function store_comment(Post $post){
        $this->validate(request(),[
            'commentBody' => 'required|min:5|max:150'
        ]);
        $c = new Comment();
        $c->post_id = $post->id  ;
        $c->c_body = request('commentBody');
        
        $c->save();
        return back();
    }
    
}
