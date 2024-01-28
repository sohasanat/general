<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Products_model extends Model
{
        protected $table = 'products';
        protected $fillable = [
                'logo',
                'name',
                'photo',
                'Description',
                'longDescription',
                'company_id',
                'remember_token',
                'created_at',
                'updated_at',
                'link',
                'Grouping',
                'storysuccess'
        ];
}
