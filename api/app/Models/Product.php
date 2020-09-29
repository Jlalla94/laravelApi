<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'slug', 'text', 'expiration_date', 'packaging_option', 'image_name'
    ];

}
