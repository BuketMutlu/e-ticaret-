<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adresler extends Model
{
    use HasFactory;
    protected $table = 'adreslers';
    protected $fillable = [
        'isim',
        'adres',
        'telefon',
    ];
        public function user()
    {
        return $this->belongsTo(User::class);
    }

}
