<?php

namespace App\Http\Controllers;
use App\Models\urunler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class begenilenController extends Controller
{
    public function begenilen()
{
    if (!Auth::check()) {
        return redirect()->route('login');
    }
    $cartItems = Auth::user()->begenilenler()->with('urun')->get();

    return view('wishlist', compact('cartItems'));
}

public function badd(Request $request)
{
    if (!Auth::check()) {
        return redirect()->route('login');
    }
    $urunID = $request->urun_id;

    $urunn = urunler::find($urunID);
    if (!$urunn) {
        return back()->withError('Ürün bulunamadı');
    }

    // Eğer ürün zaten beğenilenlere eklenmişse, tekrar ekleme yapmayın.
    if (!Auth::user()->begenilenler()->where('urun_id', $urunID)->exists()) {
        Auth::user()->begenilenler()->create([
            'urun_id' => $urunID,
        ]);
    }

    return back()->withSuccess('Ürün favorilere eklendi');
}

public function bremove(Request $request)
{
    $urunID = $request->urun_id;

    $wishlistItem = Auth::user()->begenilenler()->where('urun_id', $urunID)->first();
    if ($wishlistItem) {
        $wishlistItem->delete();
    }

    return back()->withSuccess('Başarıyla favorilerden kaldırıldı');
}


}
