<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class demo_model extends Model
{
    protected $table = 'demo';
    protected $fillable = ['fullname', 'phone', 'company', 'post', 'email', 'demo', 'broshor'];
}
