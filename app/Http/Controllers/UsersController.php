<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;

class UsersController extends Controller
{
    //
    public function create()
    {
        # code...
        return view('users.create');
    }
    public function show(User $user)
    {
        # code...
        return view('users.show',compact('user'));
    }
    public function store(Request $request)
    {
        # code...
        $this->validate($request,[
            'name'=>'required|unique:users|max:50',
            'email'=>'required|email|unique:users|max:255',
            'password'=>'required|confirmed|min:6'
        ]);
        return;
    }
}
