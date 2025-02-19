<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siparisler extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'isim',
        'soyisim',
        'adres',
        'email',
       'card_name',
        'card_number',
        'expire_month',
        'expire_year',
        'cvc',
         'payment_id',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
