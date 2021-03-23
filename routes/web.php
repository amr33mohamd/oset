<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
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

Route::get('/return/{id?}', function ($id = 0) {
  if($id == 1){
    return view('welcome',["err"=>1]);
  }
  else {
    return view('welcome',["err"=>0]);
  }
});
Route::get('/', function ($id = 0) {
  if($id == 1){
    return view('welcome',["err"=>1]);
  }
  else {
    return view('welcome',["err"=>0]);
  }
});


Route::get('/checkout/{id}', function ( $request) {
  $user = User::find($request);
    return view('Checkout',["user"=>$user]);

});


Route::get('ar/return/{id?}', function ($id = 0) {
  if($id == 1){
    return view('welcomear',["err"=>1]);
  }
  else {
    return view('welcomear',["err"=>0]);
  }
});
Route::get('/ar', function ($id = 0) {
  if($id == 1){
    return view('welcomear',["err"=>1]);
  }
  else {
    return view('welcomear',["err"=>0]);
  }
});




Route::get('/add-user','App\Http\Controllers\UsersOsetController@adduser');
Route::post('/add-designer','App\Http\Controllers\UsersOsetController@adddesigner');

Route::get('/add-contact','App\Http\Controllers\UsersOsetController@contact');
