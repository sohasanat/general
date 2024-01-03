<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobskills_model extends Model
{
    protected $table = 'jobskills';
    protected $fillable = ['skillsDescription', 'job_id'];
}
