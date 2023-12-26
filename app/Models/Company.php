<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $connection = 'laravelprojectdb';
    protected $table ='company';
    protected $fillable = ['id','logo','name','photo','Description'];


}
 