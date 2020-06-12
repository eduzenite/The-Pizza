<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Photo extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'url', 'thumbnail', 'product_id'
    ];

    protected $casts = [
        'product_id' => Product::class
    ];
}
