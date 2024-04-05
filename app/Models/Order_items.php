<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_items extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price',
    ];
    public function order()
    {
        return $this->belongsTo(Orders::class, 'order_id')->withDefault();
    }
    public function product()
    {
        return $this->belongsTo(products::class, 'product_id')->withDefault();
    }
}
