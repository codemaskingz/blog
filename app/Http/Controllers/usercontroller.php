<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class usercontroller extends Controller
{
    //
    function addData(Request $req)
    {
        $member = new member;
        $member->name=$req->name;
        $member->email=$req->email;
        $member->address=$req->address;
        $member->save();
        return redirect('');
    }
    function list()
    {
        $data=member::all();
        return view('lists',['members'=>$data]);
    }
    function delete($id)
    {
        $data=member::find($id);
        $data->delete();
        return redirect('list');
    }
    function loginhere(Request $req)
    {
       $data= $req->input();
       //note that we store the username in mycode to show the output in the console
       $req->session()->put('mycode',$data['username']);
       return redirect('profile');
       //this is to redirect to the profile page
    }
}
