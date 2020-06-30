<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function index()
    {
      $users =User::orderBy("id","desc")->paaginate(10);
      return view("users.index",[
        "users" =>$users,
        ]);
    }
    
    public function show($id)
    {
      $users = User::findOrFail($id);
      return view("users.show",[
        "user"=>$user,
        ]);
    }
}
