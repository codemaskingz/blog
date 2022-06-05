<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\studentdata;

class onetoonecontroller extends Controller
{
    //
    function oneononerelation()
    {
        return studentdata::all();

    }
    
}
