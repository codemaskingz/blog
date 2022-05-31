<?php

namespace App\Http\Controllers;

use App\Models\logindetail;
use Illuminate\Http\Request;

class AccessorController extends Controller
{
    //
    function index()
    {
        return logindetail::all();
    }
}
