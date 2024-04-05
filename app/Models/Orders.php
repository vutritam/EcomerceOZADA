<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'order_date',
        'shipping_info_id',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(users::class, 'user_id')->withDefault();
    }

    public function shiping_info()
    {
        return $this->belongsTo(ShippingInfo::class, 'shipping_info_id')->withDefault();
    }
}
