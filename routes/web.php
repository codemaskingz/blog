<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\usercontroller;
use App\Http\Controllers\examplecontroller;
use App\Http\Controllers\fileuploadcontroller;
use App\Http\Controllers\httpcontroller;
use App\Http\Controllers\userscontroller;
use App\Http\Controllers\logincontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});


route::view('contact','contact');
route::view('about','about');
route::view('login','login');
route::view('userspage','grace');
route::get('details',[usercontroller::class,'addData']);
route::post('htreq',[usercontroller::class,'loginhere']);
route::get('list',[usercontroller::class,'list']);
route::get('loads',[userscontroller::class,'ViewLoad']);
route::get('newpage',[examplecontroller::class,'getdata']);
route::get('loginpage',[logincontroller::class,'fetchdata']);
route::get('httpdata',[httpcontroller::class,'gethttpdata']);
route::post('getdata',[httpcontroller::class,'addmember']);
route::post('something',[userscontroller::class,'getsomething']);
route::view('home','home')->middleware('protectedpage');
//route::view('user','user')->middleware('protectedpage');;
route::view('noaccess','noaccess');
route::view('user','user');
route::view('profile','profile');
route::view('languages','profilee');
route::view('addme','add');
route::view('upload','upload');
route::post('uploadfile',[fileuploadcontroller::class,'fileupload']);


// route::group(['middleware'=>['protectedpage']],function(){
//     route::view('user','user');
   
// });


//this is the code to keep the user remain on the login page ,unless logout
Route::get('/user', function () {
    if(session()->has('mycode'))
    {
        return redirect('profile');
    }
    return view('user');
});


//this is the code to logout users and redirect to the login page
Route::get('/logout', function () {
    if(session()->has('mycode'))
    {
        session()->pull('mycode');
    }
    return redirect('user');
});


Route::get('/languages/{lang}', function ($lang) {
    App::setlocale($lang);
    return view('profilee');
});
