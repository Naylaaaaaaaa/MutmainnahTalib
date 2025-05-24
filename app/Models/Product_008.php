<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_008 extends Model
{
    protected $table = 'products_008';

    protected $fillable = ['name', 'description', 'price', 'stock', 'category_id', 'image'];

    public function orderItems() {
        return $this->hasMany(OrderItem_008::class, 'product_id');
    }
}

