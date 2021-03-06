<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'name',
        'slug',
        'intro_description',
        'description',
        'original_price',
        'selling_price',
        'image',
        'status',
        'trending',
        'meta_title',
        'meta_keywords',
        'meta_description',
    ];
}

