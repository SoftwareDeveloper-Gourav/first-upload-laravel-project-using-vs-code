<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultiplePhoto extends Model
{
    use HasFactory;
    protected $table="photo_table";
    protected $id="id";
}