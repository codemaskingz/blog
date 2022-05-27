<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class logindetails extends Controller
{
    //
    function dboperation()
    {
        $data = DB::table('logindetails')->get();
        return view('querybuilder',['query'=>$data]);
    }
}
