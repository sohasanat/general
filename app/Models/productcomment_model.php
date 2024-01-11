<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productcomment_model extends Model
{
    protected $table = 'productscomment';
    protected $fillable = ['name', 'email', 'Description', 'products_id'];
}
