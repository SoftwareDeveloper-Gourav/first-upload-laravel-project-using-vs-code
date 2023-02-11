<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentDetailsModel;
use App\Models\JoinModel;
use Illuminate\Support\Facades\DB;

class JoinController extends Controller
{
  
//     public function index(Request $data){
//         $save_data=new StudentDetailsModel;
//         $save_data->  
//     }


 public function calculator(Request $request){
   $first_number=$request->f_number;
   $last_number=$request->l_number;
   self::sum($first_number,$last_number);
 }
 
 public function sum($first,$second){
    $ans = $first+$second;
    echo $first.'+'.$second.'='.$ans;
 }

 public function addClass(){
    $data=JoinModel::select('id')->get();
   return view('join.add_class',['data'=>$data]);
 }


 public function addDetails(Request $request){
    $request->validate([
      'id'=>'required',
      'school'=>'required',
      'blood_group'=>'required'
    ]);
    $save_data=new StudentDetailsModel;
    $save_data->student_id=$request->id;
    $save_data->blood_group=$request->blood_group;
    $save_data->school_name=$request->school;
    $save_data->save();
    session()->flash('store','Add Successfull');
    return redirect()->back();
 }
 

 public function id(){
        $data=JoinModel::select('id')->get();
       return view('join.join',['data'=>$data]);
 }

 public function idJoin(Request $data){
    $id=$data->id;
    // $data=DB::table('student_join')
    // ->join('students_details','student_join.id','=','students_details.student_id')
    // ->where('student_join.id','=',$id)->get();

    $data=StudentDetailsModel::with('join')
    ->where('students_details.student_id','=',$id)
    ->get();
    echo "<pre>";
  print_r($data);
 }
 
}