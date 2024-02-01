<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_model extends Model
{
    protected $table = 'jobopportunity';
    protected $fillable = ['name', 'phone', 'email', 'resume', 'definitionjobs_id', 'jobname', 'created_at', 'date'];
}
