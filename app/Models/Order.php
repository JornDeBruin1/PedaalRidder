<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'items',
        'gender',
        'name',
        'address',
        'phone',
        'email',
        'payment_method',
        'total_price',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
