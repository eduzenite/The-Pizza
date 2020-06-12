<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Purchase extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'description', 'price', 'status', 'category_id'
    ];

    protected $casts = [
        'price' => 'float',
    ];

    public function products(){
        return $this->hasMany('App\Models\Product');
    }
}
