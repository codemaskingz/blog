<?php

namespace App\Http\Controllers;

use App\Models\logindetail;
use Illuminate\Http\Request;

class logincontroller extends Controller
{
    function fetchdata()
    {
        $data= logindetail::paginate(15);
        return view('lists',['holder'=>$data]);
    }

    function deleteitems($id)
    {
        $data=logindetail::find($id);
        $data->delete();
        return redirect('loginpage');
    }
    function showdata($id)
    {
        $data=logindetail::find($id);
        return view('editme',['objectholder'=> $data]);

    }
    function correction(Request $req)
    {
        $data =logindetail::find($req->id);
        $data->lastname=$req->lastname;
        $data->firstname=$req->firstname;
        $data->username=$req->firstname;
        $data->save();
        return redirect('loginpage');
    }

}
