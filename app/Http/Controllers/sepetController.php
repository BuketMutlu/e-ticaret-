<?php

namespace App\Http\Controllers;

use App\Models\sepet;
use App\Models\urunler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class sepetController extends Controller
{
    public function kart()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $cartItems = Auth::user()->sepettekiler()->with('urun')->get();
        $totalfiyat=0;



        foreach($cartItems as $cart)
        {
            $urun = $cart->urun; // İlişkili urun modelini al
            $totalfiyat += $urun->fiyat * $cart->adet;
        }


        return view('cart', compact('cartItems','totalfiyat'));


        // Kullanıcıya ait sepet ürünlerini al
       // $cartProducts = $user ? $user->cartProducts : collect();
        //return view ('cart',compact('cartItem','totalfiyat','cartProducts'));
    }

    public function add(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $user = Auth::user();
        $urun_id = $request->input('urun_id');
        $adet = $request->input('adet', 1); // Miktarı al, varsayılan olarak 1


// Ürün ve sepet kaydını bulun
$urun = urunler::findOrFail($urun_id);
$sepetItem = $user->sepettekiler()->where('urun_id', $urun_id)->first();

if ($sepetItem) {
    // Ürün zaten sepette varsa, miktarı güncelle
    $sepetItem->adet += $adet;
} else {
    // Ürün sepette yoksa, yeni bir kayıt oluştur
    $user->sepettekiler()->create([
        'urun_id' => $urun_id,
        'adet' => $adet,
    ]);
}

// Sepeti yeniden yükle
$cartItems = $user->sepettekiler()->with('urun')->get();
$totalfiyat = $cartItems->sum(function ($item) {
    return $item->adet * $item->urun->fiyat;
});

return redirect()->route('kart')->with(compact('cartItems', 'totalfiyat'));



    }
    public function remove(Request $request)
    {

        $urunID = $request->urun_id;


        $sepetItem = Auth::user()->sepettekiler()->where('urun_id', $urunID)->first();
        if ($sepetItem) {
            $sepetItem->delete();
        }

        return back()->withSuccess('Başarıyla sepetten kaldırıldı');

    }
    public function update(Request $request, $id)
{
    $user = Auth::user();
    $sepetItem = $user->sepettekiler()->where('urun_id', $id)->firstOrFail();

    $action = $request->input('action');

    if ($action == 'increase') {
        $sepetItem->adet += 1; // Miktarı artır
    } elseif ($action == 'decrease') {
        if ($sepetItem->adet > 1) {
            $sepetItem->adet -= 1; // Miktarı azalt
        }
    }

    $sepetItem->save();

    // Toplam fiyatı yeniden hesapla
    $totalfiyat = $user->sepettekiler->sum(function ($item) {
        return $item->adet * $item->urun->fiyat;
    });

    // Sepeti yeniden yükle
    $cartItems = $user->sepettekiler()->with('urun')->get();

    return redirect()->route('kart')->with(compact('cartItems', 'totalfiyat'));
}





}


