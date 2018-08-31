@extends('layout.master')

@section('content')
    <div class='col-md-8'>
       <form id="frmComments" method="Post" action="{{route('signin')}}">
            {{csrf_field()}}
        <div class="blog-post">
            <h2 class="blog-post-title">Sign-in</h2>
           
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type='email' class='form-control' name='email' id='email'>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type='password' class='form-control' name='password' id='password'/>
            </div> 
            <button type="submit" class="btn btn-primary pull-right">Save</button>
        </div> <!-- /.your comments -->
        <div class='form-group'>
            @include('layout.layout_errors')
        </div>
         </form>
    </div>
@endsection