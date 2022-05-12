<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fileuploadcontroller extends Controller
{
    
    function fileupload(Request $req)
    {
        return $req->file('filename')->store('images');
    }

}
