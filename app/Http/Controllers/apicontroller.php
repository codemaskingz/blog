<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\logindetail;
use App\Models\studentdata;

class apicontroller extends Controller
{
    //
    function dummyapi(Request $req)
    {
       // return ["name"=>"ibrahim" ,"department"=>"information Technology"];
      // return logindetail::all();

      //;
      $obj_holder = new studentdata;
      $obj_holder->LastName=$req->LastName;
      $obj_holder->FirstName=$req->FirstName;
      $obj_holder->Email=$req->Email;
      $obj_holder->Address=$req->Address;
      $result = $obj_holder->save();
      if($result)
      {
        return ["result"=>"data has been save succesfully"];

      }
      else
      {
          return ["result"=>"operation failed"];
      }


    }
}
