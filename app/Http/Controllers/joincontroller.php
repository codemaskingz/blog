<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class joincontroller extends Controller
{
    //
    function show()
    {
        return DB::table('logindetails')
        ->join('members','logindetails.id','=','members.id')
        ->select('logindetails.*')
        ->select('members.*')
        ->where('members.id',14)//to get from the members table where id= 14
        ->where('logindetails.password','oso')
        ->get();

    }
}
