<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class crud extends Controller
{
 public function store(Request $data)
 {
    $cdata->validate([
       'name'=>"required",
       'number'=>'required|min:10|max:10',
       'password'=>'required|min:3',
       '_password'=>'required|same:password'
    ]);
 }
}