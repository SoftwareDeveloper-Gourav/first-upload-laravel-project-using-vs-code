<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\JoinModel;

class Join extends Controller
{
   public function store(Request $data){
       $data->validate([
          'name'=>'required',
          'number'=>'required|min:10',
          'password'=>'required|min:3'
       ]);
   $data_save=new JoinModel;
   $reg="REG".rand('10000','90000');
   $data_save->name=$data->name;
   $data_save->number=$data->number;
   $data_save->password=md5($data->password);
   $data_save->registration_number=$reg;
   $data_save->save();
   return redirect()->back()->with('store','Student Registered, Registration No = '.$reg);


      }

   public function createApi(Request $rqst){
      
         $first_no = $rqst->first_no;
         $second_no = $rqst->second_no;
         $condition = $rqst->condition;
         switch ($condition) {
            case 'plus':
               $res = $first_no+$second_no;
               $status = true;
               break;
            case 'minus':
               $res = $first_no-$second_no;
               $status = true;
               break;
            case 'round':
               $res = $first_no*$second_no;
               $status = true;
               break;
            case "divide":
               $res = $first_no/$second_no;
               $status = true;
               break;
            default:
               $res = "Error:Not Valid !";
               $status = false;

               break;
         }
      
      echo json_encode(
         array('response:'=>$res,'status'=>$status,'condition'=>$condition)
      );

      }
}