<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class members_model extends Model
{
    protected $table = 'members';
    protected $fillable = ['photo', 'name', 'title', 'company_id'];
}
