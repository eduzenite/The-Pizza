<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Purchase extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'comments'
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function purchase_products()
    {
        return $this->hasMany(PurchaseProduct::class);
    }
}
