<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detailjob_model extends Model
{
    protected $table = 'definitionjobs';
    protected $fillable = ['title', 'Description', 'photo'];
}
