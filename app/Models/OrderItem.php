<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'urun_id',
        'urunadi',
        'adet',
        'fiyat',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
