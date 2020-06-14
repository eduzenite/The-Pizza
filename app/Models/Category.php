<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'description', 'status', 'slug'
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }
}
