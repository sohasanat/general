<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hints_model extends Model
{
    protected $table ='hints';
    protected $fillable = ['Description','products_id'];
}
