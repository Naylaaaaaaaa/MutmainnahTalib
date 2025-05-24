<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem_008 extends Model
{
    protected $table = 'order_items_008';

    protected $fillable = ['order_id', 'product_id', 'quantity', 'unit_price', 'subtotal'];

    public function order() {
        return $this->belongsTo(Order_008::class, 'order_id');
    }

    public function product() {
        return $this->belongsTo(Product_008::class, 'product_id');
    }
}
