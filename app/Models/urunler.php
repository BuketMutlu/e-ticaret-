<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class urunler extends Model
{
    protected $fillable = [
        'urunadi','fiyat','resim','aciklama','aresim1','aresim2','aresim3','boyut','ozel_gun','kategori',
     ];


}
