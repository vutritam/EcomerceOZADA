<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productImages extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'image_url',
    ];

    // Định nghĩa mối quan hệ với bảng products
    public function product()
    {
        return $this->belongsTo(products::class);
    }
}
