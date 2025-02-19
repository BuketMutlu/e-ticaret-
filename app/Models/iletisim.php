<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class iletisim extends Model
{
    protected $fillable = [
        'isim',
        'email',
        'konu',
    'telefonno',
    'mesaj',
    ];
}
