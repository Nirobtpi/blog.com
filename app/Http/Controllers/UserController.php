<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\returnSelf;

class UserController extends Controller
{
    function index(){
        // $task=Task::
        // return Auth::user()->id;
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
            'password'=>Hash::make($request->password),
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
         $getROle=User::findOrfail($id);
        // return $getROle->is_admin;

        if($getROle->is_admin != 1){
            User::findOrFail($id)->delete();
            return redirect('admin/users/list')->with('success','User Data Update Successfully');
        }else{
             return redirect('admin/users/list')->with('success','You can not delete data');
        }
        
    }

    function change_password($id){
       $password= User::findOrFail($id);
       return view('backend.user.changepassword',compact('password'));
    }

    function passwordChange($id, Request $request){
      $password=  User::findOrFail($id);
        // return $password->password;
        if( Hash::check($request->old_password, $password->password)){
            
            $request->validate([
                'password'=>['required','confirmed','min:8']
            ],[
                'password.required'=>'Password is required',
                'password.confirmed'=>'Password not match',
                'password.min'=>'Min password used in 8 digit',
            ]);
            User::findOrFail($id)->update([
                'password'=>Hash::make($request->password),
            ]);
            return back()->with('success','Password updated successfully');
        }else{
            return back()->with('error','Old password does not match');
        }
    }
}
