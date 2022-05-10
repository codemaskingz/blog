<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class examplecontroller extends Controller
{
    //
    public function getdata(){
        return DB::select("select * from logindetails");

    }
    
}
