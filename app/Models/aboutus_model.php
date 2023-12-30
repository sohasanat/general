<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aboutus_model extends Model
{
    protected $table = 'about';
    protected $fillable = ['title', 'Description', 'Date'];
}
