<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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
Route::get("/test", function () {

    return User::get();
});

Route::get("hello", function () {
    return "<p>Hello World!</p>";
});
Route::get("aqq", function () {
    return "aaa";
});
Route::get("character",function (){
   return ['John'=>"Lennon",'asd1'=>"sadad",'asd2'=>"sadad",'asd3'=>"sadad"];
});
