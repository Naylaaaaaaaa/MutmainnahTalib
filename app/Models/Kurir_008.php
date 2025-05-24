<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kurir_008 extends Model
{
    protected $table = 'kurirs_008';

    protected $fillable = ['user_id', 'vehicle_type', 'vehicle_plate', 'status', 'phone_number'];

    public function user() {
        return $this->belongsTo(User_008::class, 'user_id');
    }

    public function orders() {
        return $this->hasMany(Order_008::class, 'kurir_id');
    }
}
