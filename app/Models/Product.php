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

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    public function purchases()
    {
        return $this->belongsTo(Purchase::class);
    }
}
