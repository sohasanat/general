<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobexpertise_model extends Model
{
    protected $table = 'jobexpertise';
    protected $fillable = ['expertiseDescription', 'job_id'];
}
