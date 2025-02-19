<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use App\Models\siparisler;
use App\Models\urunler;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Iyzipay\Model\Currency;
use Iyzipay\Request\CreatePaymentRequest;
use Locale;

class siparisController extends Controller
{
    public function siparisFormu()
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login');
        }

        $adresler = $user->adresler;
        $odemeler = $user->odemeler;
        $cartItems = $user->sepettekiler()->with('urun')->get();
        $totalfiyat = $cartItems->sum(function ($item) {
            return $item->adet * $item->urun->fiyat;
        });

        $order_id=1;
        return view('checkout', compact('user', 'adresler', 'odemeler', 'cartItems', 'totalfiyat','order_id'));
    }







}
