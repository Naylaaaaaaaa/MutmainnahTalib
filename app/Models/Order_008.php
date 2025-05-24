<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order_008 extends Model
{
    protected $table = 'orders_008';

    protected $fillable = ['user_id', 'kurir_id', 'order_date', 'total_price', 'shipping_address', 'status'];

    public function user() {
        return $this->belongsTo(User_008::class, 'user_id');
    }

    public function kurir() {
        return $this->belongsTo(Kurir_008::class, 'kurir_id');
    }

    public function items() {
        return $this->hasMany(OrderItem_008::class, 'order_id');
    }
}
