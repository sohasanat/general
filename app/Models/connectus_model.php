<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class connectus_model extends Model
{
    protected $table = 'connects';
    protected $fillable = ['title', 'email', 'Description'];
}
