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
            'password'=>['required','confirmed','min:8'],
        ],[
            'name.required'=>'Name is required',
            'email.required'=>'Email is required',
            'email.unique'=>'Email already used',
            'password.required'=>'Password is required',
            'password.min'=>'Password must be used 8 digit',
            'password.confirmed'=>'Password not match',
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>SHA1($request->password),
            'status'=>$request->status,
        ]);


        return redirect('admin/users/list')->with('success','User Created Successfully');
    }

    function edit($id){
        $data=User::findOrFail($id);
        return view('backend.user.edit', compact('data'));
    }

    function update_user($id,Request $request){

         $request->validate([
            'name'=>'required',
            'email'=>['required','unique:users,email,'.$id],
        ],[
            'name.required'=>'Name is required',
            'email.required'=>'Email is required',
            'email.unique'=>'Email already used',
        ]);
        
       User::findOrFail($id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
       ]);
        return redirect('admin/users/list')->with('success','User Data Update Successfully');
    }

    function delete_user($id){
        User::findOrFail($id)->delete();
        return redirect('admin/users/list')->with('success','User Data Update Successfully');
    }
}
