<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'description', 'price', 'status', 'category_id', 'slug'
    ];

    protected $casts = [
        'price' => 'float',
        'category_id' => Category::class
    ];

    public function photos(){
        return $this->hasMany('App\Models\Photo');
    }
}
