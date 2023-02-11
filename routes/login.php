<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
Route::get('loginTest',function(){
  return view('login.index');
});
Route::post('loginTest',[StudentController::class,'testLogin']);