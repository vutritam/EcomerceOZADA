<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class users extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'country_region',
        'trade_role',
        'email',
        'password',
        'company_name',
        'full_name',
        'phone_number',
    ];
}
