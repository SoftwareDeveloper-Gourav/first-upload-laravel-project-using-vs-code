<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class STUDENT extends Model
{
    use HasFactory;
    protected $table="student";
    protected $primary_key="id";
    // public function babu(){
    //     return $this->hasMany('App\Models\GROUP','student_id','id');
    // }
}