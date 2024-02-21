<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class model_tiket_massage_table extends Model
{
    protected $table = 'tiketmassege';
    protected $fillable = ['tiket_id', 'Description', 'from', 'file', 'title'];
}
