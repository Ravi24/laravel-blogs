<?php

namespace Blogs\Http\Controllers;

use Illuminate\Http\Request;

use Blogs\Post;
use Blogs\blog_copy;
class PostsController extends Controller
{
    public static  function show(){
        $data = Post::latest()->get();
        return view('index')->with('posts',$data);
    }
    public static function showById(Post $post){
        return view('Posts.show-post')->with('post',$post);
    }
    public function create(){
        return view('Posts.create');
    }
    public function store(){
       $this->validate(request(),[
           'title' => 'required|min:3|max:50' ,
           'blogBody' => 'required|min:50|max:1500',
        ]);
        $post = new Post;
        $post->p_title = request('title');
        $post->p_body = request('blogBody');
        $post->p_author = 'anonymous';
        $post->save();
       
       return redirect('/');
    }
    public function copyBlog()
    {
        return view('\Posts.copy_post');
    }  
    
    public function getBlogDetails(Post $blog_id)
    {
        return json_encode($blog_id);
    }
    
    public function store_comment()
    {
        $blog = new blog_copy();
        $blog->b_title = request('title');
        $blog->b_body = request('blog');
        $blog->save();
        return back();
    }
}
