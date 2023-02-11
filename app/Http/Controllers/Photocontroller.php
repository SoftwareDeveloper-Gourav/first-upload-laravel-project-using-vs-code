<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PhotoModel;
use App\Models\MultiplePhoto;


class Photocontroller extends Controller
{
  public function store(Request $data)
  {
    $data->validate([
      'name' => 'required',
      'photo' => 'required|mimes:jpeg,jpg,png|max:500'
    ]);
    $image = $data['photo'];
    $extenstion = $image->getClientOriginalExtension();
    $imagename = time() . '.' . $extenstion;
    $image->move('upload/', $imagename);
    $upload = new PhotoModel;
    $upload->photo = $imagename;
    $upload->save();
    return "Store Successfull";

  }

  public function check(Request $data)
  {
    $data->validate([
      'name' => 'required',
      'number' => 'required',
      'email' => 'required',
      'g-recaptcha-response' => 'required|captcha'
    ]);
    return "Ok";
  }

  public function test(Request $request)
  {
    if (empty($request->name)) {
      $request->session()->flash('ok', 'hello');
      return view('form');
    } else {
      $request->session()->flash('ok', $request->name);
      return view('form');
    }
  }

  public function multipleSave(Request $data)
  {
    $data->validate([
       'image'=>'required'
    ]);
    foreach ($data->image as $photo ) {
      $extenstion=$photo->getClientOriginalExtension();
      // echo $extenstion;
      $image_name=rand('10000','99999').'.'.$extenstion;
      $photos[]=$image_name;
      $photo->move('photos',$image_name);
     
    }
    $all_photos=json_encode($photos);
    $save_photo=new MultiplePhoto;
    $save_photo->photo=$all_photos;
    $save_photo->save();
    session()->flash('ok','Photo Submit');
    return back();

     
  }

  public function viewPhoto(){
    $all_data=MultiplePhoto::all();
    foreach ($all_data as $key=> $value) {
      $photos[]=json_decode($value->photo);
    }
  //   echo "<pre>";
  //   print_r($photos);
  //  die();
    // $data=compact('photos');
    return view('image.view',['photos'=>$photos]);
  }

}