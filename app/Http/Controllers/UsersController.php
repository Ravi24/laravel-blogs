<?php

namespace Blogs\Http\Controllers;

use Illuminate\Http\Request;
use Blogs\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
class UsersController extends Controller
{
    public function show()
    {
        return view('/auth.register');
    }
    public function store()
    {
        $this->validate(request(),[
            'name' => 'required',
            'email' =>'required|email',
            'password'=>'required|min:5|max:15|confirmed|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[!$#%]).*$/|',
        ],[
            'password.regex' =>'Password must be alphanumeric'
        ]);
        $user = new User();
        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        
        $user->save();
        
        return back();
    }
    
    public function signinShow()
    {
        return view('/auth.signin');
    }
    
    public function authenticate(Request $request)
    {
        $this->validate(request(),[
            'email' =>'required|email',
            'password' => 'required'
        ]);
       $credentials =$request->only('email','password');
        if(\Auth::attempt($credentials))
        {
            return redirect('/');
            
        }
        else{
            return back();
        }
        
    }
}
