<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JoinModel extends Model
{
    use HasFactory;
    protected $table="student_join";
    protected $primary_key="id";
}