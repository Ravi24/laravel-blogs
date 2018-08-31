<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => ['web']],function(){
    Route::get('/', [
        'as' => 'index',
        'uses' => 'PostsController@show'
    ]); 
	Route::get('/posts/create',[
		'as' => 'create',
		'uses' => 'PostsController@create'
	]);
          route::get('/posts/edit',[
           'as' => 'edit-post',
            'uses' => 'editPostsController@showPost'
        ]);
          route::post('/posts/edit',[
              'uses' => 'editPostsController@store'
          ]);
        Route::POST('/posts',[
		'as' => 'posts',
		'uses' => 'PostsController@store'
	]);
        Route::get('/posts/{post}',[
        'as' => 'getPost',
        'uses' => 'PostsController@showById'
        ]); 
        
        route::post('/posts/{post}/comments',[
            'as' => 'comments',
            'uses' => 'CommentsController@store_comment'
        ]);
      
});

Route::group(['middleware'=>['web']],function(){
    Route::get('/register',[
       'as' => 'user_registration' ,
        'uses' => 'UsersController@show'
    ]);
    Route::post('/register',[
       'uses' => 'UsersController@store'
    ]);
    Route::get('/signin',[
        'as' => 'signin',
        'uses' => 'UsersController@signinShow'
    ]);
    Route::post('/signin',[
        'uses' => 'UsersController@authenticate'
    ]);
});
