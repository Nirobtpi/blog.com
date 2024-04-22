<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Mail\RegisterMail;
use Illuminate\Support\Facades\Auth;
use Psy\Util\Str;


class AuthController extends Controller
{
    function login(){
        return view('auth.login');
    }
    function register(){
        return view('auth.register');
    }
    function forgetPassword(){
        return view('auth.forget-password');
    }

    function create_user(Request $request){
       
        // $data= $request->all();
        $request->validate([
            'name'=>['required'],
            'email'=>['required','unique:users,email'],
            'password'=>['required','min:8'],
        ],[
            'name.required'=>'Name is required',
            'email.required'=>'Email is required',
            'email.unique'=>'Email already used',
            'email.password'=>'Password is required',
            'email.min'=>'Password must me used 8 digit',
        ]);
        $rand=rand(1111,9999);
        $password=SHA1($request->password);
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$password,
            'remember_token'=>$rand,
        ]);
        // Mail::to($request->email)->send(new RegisterMail(User::class));
        return redirect('/login')->with('success','Registration Success');
    }


    function authLogin(Request $request){
        $password=SHA1($request->password);
        if(Auth::attempt(['email' => $request->email,'password' => $password])){
            if(Auth::user()->role == 1){
                echo "Hello Admin";
            }else{
                return redirect('/');
            }
        }else{
            return back()->with('error','Your email or password is wrong');
        }
    }
}
