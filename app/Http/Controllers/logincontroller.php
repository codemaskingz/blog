<?php

namespace App\Http\Controllers;

use App\Models\logindetail;
use Illuminate\Http\Request;

class logincontroller extends Controller
{
    //
    function fetchdata()
    {
        return logindetail::all();
    }
}
