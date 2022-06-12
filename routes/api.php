<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apicontroller;
use App\Http\Controllers\ApiResourceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('dummy.ng',[apicontroller::class,'dummyAPI']);
Route::get('getting.ng',[apicontroller::class,'getusers']);
Route::post('adding.ng',[apicontroller::class,'addusers']);
Route::put('update.ng',[apicontroller::class,'updateusers']);
Route::delete('delete.ng/{id}',[apicontroller::class,'delete']);
Route::get('search.ng/{LastName}',[apicontroller::class,'search']);
Route::post('saving.ng',[apicontroller::class,'testData']);


Route::apiResource("member",ApiResourceController::class);




