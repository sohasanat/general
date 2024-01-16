<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Products_model extends Model
{
<<<<<<< HEAD
        protected $table = 'products';
        protected $fillable = ['logo', 'name', 'Description', 'longDescreption', 'Grouping', 'company_id'];
=======
        protected $table ='products';
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
            ];

>>>>>>> 43acbcbfc9053ab26a0b4a7338bf64c358597272
}
