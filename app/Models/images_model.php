<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class images_model extends Model
{
    protected $table ='images';
    protected $fillable = ['image','products_id'];
}
