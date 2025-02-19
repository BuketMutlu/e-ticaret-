<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
      // Kullanılan tablo adı
      protected $table = 'Payments';

      // Doldurulabilir alanlar
      protected $fillable = [
          'price', 'paidPrice', 'currency', 'installment',
          'basketId', 'paymentChannel', 'paymentGroup', 'card_name',
          'card_number', 'expire_month', 'expire_year', 'cvc', 'order_note'
      ];

      // Tarih alanlarını otomatik olarak yönet
      public $timestamps = true;
}
