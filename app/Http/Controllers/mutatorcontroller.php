<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\logindetail;

class mutatorcontroller extends Controller
{
    //
    function mutators()
    {
      return logindetail::all();
    }
}
