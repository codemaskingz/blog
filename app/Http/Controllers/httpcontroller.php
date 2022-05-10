<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class httpcontroller extends Controller
{
    //
    function gethttpdata()
    {

    }
    
    function addmember(Request $req)
    {
        $data= $req->input('username');
        $req->session()->flash('username',$data);
        return redirect('addme');

    }
}
