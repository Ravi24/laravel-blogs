@extends('layout.master')

@section('content')
<script src="/js/growers.js"></script>
<div class="row">
     <div class="col-sm-8 blog-main" ng-app="grower_dtl" ng-controller="growerCtrl">

      <div class="blog-post">
        <h2 class="blog-post-title">Edit blog post</h2>
        <form method="POST" action="{{route('edit-post')}}" >
            
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control" id="title" name="title" value="{!! old('title') !!}" ng-model="title"ng-blur='test()'>
            </div>
            <div class="form-group">
              <label for="blogBody">Body</label>
              
              <textarea class="form-control"id="blogBody" name ="blogBody" rows="10" cols="10" value="{!! old('blogBody') !!}"
                        ng-model="body"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
           
            @include('layout.layout_errors')    
</form>
      </div><!-- /.blog-post -->
    </div><!-- /.blog-main -->
@endsection
@section('sidebar')
 @include('layout.sidebar')
@endsection