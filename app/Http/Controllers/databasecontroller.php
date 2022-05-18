<?php

namespace App\Http\Controllers;

use App\Models\logindetail;
use Illuminate\Http\Request;

class databasecontroller extends Controller
{
    //
    function listcollector()
    {
        $data= logindetail::paginate(10);
        return view('list',['keywords'=>$data]);
    }
}
