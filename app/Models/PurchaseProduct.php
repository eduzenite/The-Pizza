<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class PurchaseProduct extends Pivot
{
    use SoftDeletes;

    protected $fillable = [
        'purchase_id', 'product_id', 'price', 'quantity'
    ];

    protected $casts = [
        'purchase_id' => 'int',
        'product_id' => 'int',
        'price' => 'float',
        'quantity' => 'int'
    ];

    protected $table = 'purchase_products';

    public function purchase_products()
    {
        return $this->belongsTo(Purchase::class);
    }
}
