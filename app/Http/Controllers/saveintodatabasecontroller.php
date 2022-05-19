<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userdetail;

class saveintodatabasecontroller extends Controller
{
    //
    function savetodatabase(Request $req)
    {
        $members = new userdetail;
        $members->lastname=$req->lastname;
        $members->firstname=$req->firstname;
        $data= $req->input('lastname');
        $req->session()->flash('lastname',$data);
        $members->save();
        return redirect('getme');
    
    }
    // function addmember(Request $req)
    // {
    //     $data= $req->input('username');
    //     $req->session()->flash('username',$data);
    //     return redirect('getme');

    // }
}
