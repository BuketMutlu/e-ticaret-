<?php

namespace App\Models;
use App\Models\Adresler;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'isim',
        'soyisim',
        'email',
        'password',
        'is_admin',


    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function begenilenler()
    {
        return $this->hasMany(begenilen::class);
    }

    // Kullanıcının sepetindeki ürünler
    public function sepettekiler()
    {
        return $this->hasMany(sepet::class);
    }

    public function adresler()
    {
        return $this->hasMany(Adresler::class);  // Adres modelini ve tablosunu belirtir.
    }
    public function odemeler()
    {
        return $this->hasMany(odeme::class);  // odeme modelini ve tablosunu belirtir.
    }

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];




}
