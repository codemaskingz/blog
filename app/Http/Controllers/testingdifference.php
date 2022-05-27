<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class testingdifference extends Controller
{
    //
    function testdiff()
    {
        //return (array)DB::table('logindetails')->find(27); or return DB::table('logindetails')->find(12);
        return DB::table('logindetails')
        ->max('firstname');
        
        //->min('firstname');
        
        //->min('id');

        //->max('id');
        
        //->count();

        //->sum('id');
         
        //->avg('id');
        
        
        //->where('id',18)->delete();
        // ->insert(
        //     [
        //         'lastname'=>'isiaka',
        //         'firstname'=> 'amotekun',
        //         'username'=>'csc/16/0098',
        //         'password'=>'a1plus',
        //         'repassword'=>'a1plus',
        //         'email'=>'amotekun@gmail.com',
        //         'stateoforigin'=>'Eiti-state',
        //         'localgovernment'=>'oye-localgovernment',
        //         'phonenumber'=> '08122334455',
        //         'dateofbirth'=>'07/03/1988',
        //         'age'=>'34',
        //         'gender'=>'male',
        //         'permanenthomeaddress'=>'myhometown',
        //         'schooladdress'=>'futa',
        //         'crcunit'=>'software engineering',
        //         'passport'=>'hdhdhdhdjjkwhssk',
        //         'vkey' =>'123abc',
        //         'createdate'=>'12/04/2022'

        //     ]
        // );
        
    
    }
}
