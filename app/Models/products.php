<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $fillable = [
        'shop_id',
        'name',
        'description',
        'price',
        'image',
        'category_id',
        'status',
    ];
    public function images()
    {
        return $this->hasMany(productImages::class);
    }
}
