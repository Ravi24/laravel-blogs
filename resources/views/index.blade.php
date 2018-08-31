@extends('layout.master')

@section('content') 
   <div class="row">
     <div class="col-sm-8 blog-main">
         @foreach($posts as $post)
            <div class="blog-post">
                <a href="/posts/{{$post->id}}"<h2 class="blog-post-title">{{$post->p_title}}</h2></a>
            <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}} by <a href="#">{{$post->p_author}}</a></p>
            <p>{{$post->p_body}}</p>
            </div>
         @endforeach
         

      <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
      </nav>
    
    </div><!-- /.blog-main -->

@endsection