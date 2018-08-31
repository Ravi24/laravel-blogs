@extends('layout.master')

@section('content')
    <div class='col-md-8'>
       <form id="frmComments" method="Post" action="{{route('user_registration')}}">
            {{csrf_field()}}
        <div class="blog-post">
            <h2 class="blog-post-title">User Registration</h2>
            <div class="form-group">
                <label for="username">User Name</label>
                <input type='text' class='form-control' name='name' id='username'>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type='email' class='form-control' name='email' id='email'>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type='password' class='form-control' name='password' id='password'>
            </div>
            
            <div class="form-group">
                <label for="password">Confirm Password</label>
                <input type='password' class='form-control' name='password' id='password'>
            </div>
            
            <button type="submit" class="btn btn-primary pull-right">Save</button>
        </div> <!-- /.your comments -->
        <div class='form-group'>
            @include('layout.layout_errors')
        </div>
         </form>
    </div>
@endsection