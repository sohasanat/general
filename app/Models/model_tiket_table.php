<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_tiket_table extends Model
{
    protected $table = 'tiket';
    protected $fillable = ['name', 'email', 'phone', 'title', 'receiver', 'section', 'importent', 'status'];
}
