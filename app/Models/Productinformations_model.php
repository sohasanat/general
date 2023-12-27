<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productinformations_model extends Model
{
    protected $table ='productsinformation';
    protected $fillable = ['Description','photo','products_id'];
}
 