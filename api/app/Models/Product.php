<?php


namespace App\Models;


class Product
{
    protected $fillable = [
        'title', 'slug', 'text', 'expiration_date', 'packaging_option', 'image_name'
    ];

}
