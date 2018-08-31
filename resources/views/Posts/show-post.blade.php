@extends('layout.master')

@section('content') 
   <div class="row">
     <div class="col-sm-8 blog-main" >
        <div class="blog-post">
            <h2 class="blog-post-title">{{$post->p_title}}</h2>
        <p class="blog-post-meta">{{$post->created_at->toFormattedDateString()}} by <a href="#">{{$post->p_author}}</a></p>
        <p>{{$post->p_body}}</p>
        </div>
    

      <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
      </nav>
        <!-- your Comments -->
        <form id="frmComments" method="Post" action="/posts/{{$post->id}}/comments">
            {{csrf_field()}}
        <div class="blog-post">
            <h2 class="blog-post-title">Comment Section</h2>
            <div class="form-group">
                <label for="blogBody">Write Comment</label>
                <textarea class="form-control" id="commentBody" name ="commentBody" rows="2" cols="3" value="{!! old('commentBody') !!}"></textarea>
            </div>
            <button type="submit" class="btn btn-primary pull-right">Save</button>
        </div> <!-- /.your comments -->
        <div class='form-group'>
            @include('layout.layout_errors')
        </div>
         </form>
     <!-- comments -->
     
         <div class="blog-post">
            <h2 class="blog-post-title">Comments..</h2>
            @foreach($post->comments as $comment)
            <article><strong>{{$comment->created_at->diffForHumans()}}</strong> &nbsp{{$comment->c_body}}</article>
            @endforeach
        </div> <!-- /.comments -->
    </div><!-- /.blog-main -->

    
@endsection 
@section('sidebar')
 @include('layout.sidebar')
@endsection
