<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog_model extends Model
{
    protected $table = 'blog';
    protected $fillable = ['title', 'Description', 'photo', 'name', 'point', 'point_id'];
}
