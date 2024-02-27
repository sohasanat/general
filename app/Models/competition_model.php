<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class competition_model extends Model
{
    protected $table = 'compition';
    protected $fillable = ['name', 'phone', 'email', 'resume', 'Description'];
}
