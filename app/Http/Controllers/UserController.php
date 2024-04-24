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
}
