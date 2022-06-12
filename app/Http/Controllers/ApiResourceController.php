<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\studentdata;
use Illuminate\Support\Facades\Validator;

class ApiResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return studentdata::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $add_data = new studentdata;
        $add_data->LastName = $request->LastName;
        $add_data->FirstName = $request->FirstName;
        $add_data->Email = $request->Email;
        $add_data->Address = $request->Address;
        $validate_request = $add_data->save();
        if($validate_request)
        {
            return ["result"=>"the data has been added successfully"];
        }
        else
        {
            return ["result"=>"data failed"];
            //return response()->json($validate_request->errors(),401);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $data_edit = studentdata::find($request->$id);
        $data_edit->LastName = $request->LastName;
        $data_edit->FirstName = $request->FirstName;
        $data_edit->Email = $request->Email;
        $data_edit->Address = $request->Address;
        $result_test = $data_edit->save();

        if ($result_test)
        {
            return ["result"=>"data update successfully"];
        }
        else{
            return["result"=>"data update fails"];
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
