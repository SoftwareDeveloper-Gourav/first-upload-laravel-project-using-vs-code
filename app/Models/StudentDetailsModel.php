<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentDetailsModel extends Model
{
    use HasFactory;
    protected $table="students_details";
    protected $primary_key="id";
    
    public function join(){
        return $this->hasMany('App\Models\JoinModel','id','student_id');
    }
}