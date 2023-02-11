<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\Photocontroller;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\Join;
use App\Http\Controllers\JoinController; 



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


Route::get('/', function(){
    return view('welcome');
});
Route::post('/oi', [Photocontroller::class, 'store']);

Route::get('/run',function(){
    return view('captcha');
});
Route::post('/form',[Photocontroller::class,'check']);
Route::get('form',function(){
    return view('form');
});
Route::post('test',[Photocontroller::class,'test']);



Route::get('/',function(){
    return view('test');
  });

Route::get('/', function () {
    return view('testing.form');
});
Route::post('/form', [StudentController::class, 'registration']);
Route::post('showdata', [StudentController::class, 'show']);
Route::post('/delete_data', [StudentController::class, 'delete']);

Route::get('test', [StudentController::class, 'testing']);
Route::get('pincode/{pin_id}', [StudentController::class, 'getPinCode']);
// THIS IS A SEARCH ROUTE 

Route::get('/searchTest', function () {
    return view('search.index');
});

Route::post('/add', [StudentController::class, 'addUser']);
Route::get('/Show', [StudentController::class, 'view']);
Route::post('/search',[StudentController::class,'search']);
Route::get('/search',[StudentController::class, 'view']);
Route::post('/deleteSearch',[StudentController::class,'multipleDelete']);

Route::get('ajax-app', function () {
    return view('ajax.index');
});
Route::post('ajax',[AjaxController::class,'store']);
Route::post('show',[AjaxController::class,'showData']);

// COUNTRY APIS 
Route::get('country_api',[StudentController::class,'country']);
// MULTIPLE IMAGE 
Route::get('multiple-image',function(){
    return view('image.index');
});
Route::post('multiple-image',[Photocontroller::class,'multipleSave']);
Route::get('Photos-View',[Photocontroller::class,'viewPhoto']);
Route::get('/json',function(){
    return view('json.index');
});
Route::get('join',function(){
    return view('join.index');
});



Route::post('join',[Join::class,'store']);
Route::get('add_class',[JoinController::class,'addClass']);
Route::post('details',[JoinController::class,'addDetails']);
Route::get('calculator',function(){
   return view('calculator.index');
});
Route::get('id_join',[JoinController::class,'id']);
Route::post('id_join',[JoinController::class,'idJoin']);

Route::post('calculator',[JoinController::class,'calculator']);
Route::get('otp',function(){
    return view('otp.index');
});

Route::post('api-create',[Join::class,'createApi']);