<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class odeme extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'kart_numarasi',
        'sonkullanma_tarihi',
        'cvv',
    ];



    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
