<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'shipping_address',
        'contact_name',
        'contact_phone',
        // Thêm các trường khác nếu cần
    ];
}
