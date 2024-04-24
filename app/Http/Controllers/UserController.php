<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function index(){
        // $task=Task::
     $allUser=   User::where('is_Admin', "=", 0)->orderBy('id','DESC')->simplePaginate(3);
     return view('backend.user.user-list',compact('allUser'));
    }

    function add_user(){
        return view('backend.user.add-user');
    }
    function insert_user(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>['required','unique:users,email'],
            'password'=>['required','min:8','confirmed'],
            'password_confirmation'=>['required','same:password'],
        ],[
            'name.required'=>'Name is required',
            'email.required'=>'Email is required',
            'email.unique'=>'Email already used',
            'password.required'=>'Password is required',
            'password.min'=>'Password must be used 8 digit',
            'password.confirmed'=>'Password not match',
        ]);


        return $request->all();
    }
}
