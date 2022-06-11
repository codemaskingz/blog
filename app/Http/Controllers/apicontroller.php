<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\logindetail;
use Illuminate\Support\Facades\Validator;
use App\Models\studentdata;

class apicontroller extends Controller
{
    
    function dummyApI()
    {
        //this is just to test for dummyapi with postman
        return ["name"=>"ibrahim" ,"department"=>"information Technology"];
    }
    


    function getusers()
    {
        //this the api get method of geting data from table using postman
        //all the data in studentdatas table will be display in postman api
      return studentdata::all();
    }




    function addusers(Request $req)
    {
      //this the post method of sending data to db table
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




    function updateusers(Request $req)
    {
      //this the post method of sending data to db table
      $obj_holder = studentdata::find($req->id);
      $obj_holder->LastName=$req->LastName;
      $obj_holder->FirstName=$req->FirstName;
      $obj_holder->Email=$req->Email;
      $obj_holder->Address=$req->Address;
      $result = $obj_holder->save();
      if($result)
      {
        return ["result"=>"data has been updated succesfully"];

      }
      else
      {
          return ["result"=>"update operation failed"];
      }


    }




    function delete($id)
    {
        //this is how to delete a record from database with postman api
        $my_unique_record = studentdata::find($id);
        $result = $my_unique_record->delete();
        if($result)
        {
            return["result"=>"record has been delted sucessfully"];
        }
        else
        {
            return ["result"=>"unable to delete a recored successfully"];
        }
    }



    function search($LastName)
    {
        //this is to search by lastname 
        //return studentdata::where("LastName",$LastName)->get();
       // return studentdata::where("LastName",$LastName|| "Firstname",$FirstName||"Email",$Email||"Address",$Address)->get();
         
       //this is to search using character
       return studentdata::where("LastName","like","%".$LastName."%")->get();
    }



    //this is the logic for API validation
    function testData(Request $req)
    {
        $rules = array(
            "LastName"=>"required|min:2|max:25",
            "FirstName"=>"required|min:2|max:25",
            "Email"=>"required",
            "Address"=>"required|min:5|max:200"
        );
        $validator_poles = validator::make($req->all(),$rules);

        
        if($validator_poles->fails())
        {
            //if the $validation_poles failed
            return response()->json($validator_poles->errors(),401);
        }
        else
        {


            //this the post method of sending data to db table
            //if all the validator terms are met then this code will be executed
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
}
