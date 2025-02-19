<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sepet extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'urun_id', 'adet'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function urun()
    {
        return $this->belongsTo(urunler::class);
    }
}
