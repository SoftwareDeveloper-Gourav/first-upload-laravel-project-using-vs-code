<?php
use App\Http\Controllers\crud;
use Illuminate\Support\Facades\Route;

Route::get('crud',function(){
    return view('crud.index');
});
Route::post('crud',[crud::class,'store']);