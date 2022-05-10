<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userscontroller extends Controller
{
    //
    public function ViewLoad()
    {
        $data=['bosede','ajayi','omolade','ajewole'];
        return view('users',['user'=>$data]);
    }

    public function getsomething(Request $req)
    {
        //this is how to validate form in laravel
        $req->validate([
            'username'=>'required |max:10',
            'password'=>'required |min:5',
            'email'=>'required'
        ]);
        return $req->input();
    }
}
