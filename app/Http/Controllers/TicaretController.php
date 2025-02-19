<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\urunler;
use Illuminate\Support\Facades\Storage;


class TicaretController extends Controller
{
    public function anasayfa()
    {
        $kategoriler = urunler::all();

        return view('index',compact("kategoriler"));
    }


    public function iletisim()
    {
        return view ('contact');
    }

    public function odeme()
    {
        return view ('checkout');
    }

    public function urundetay($id)
    {
        $kategoriler = urunler::find($id);

        if (!$kategoriler) {


        }


        return view ('product-details',compact("kategoriler"));
    }
    public function kategoris(Request $request)
    {

        // Formdan gelen veriyi filtrelemek için array_filter kullanın
        $ozel_gunler = array_filter($request->input('ozel_gunler', []));

        // Sorguyu buna göre güncelleyin
        $query = urunler::query();

        // Özel gün filtrelemesi
        if (!empty($ozel_gunler)) {
            $query->whereIn('ozel_gun', $ozel_gunler);
        }

        // Diğer filtreleme işlemleri (boyut, fiyat aralığı, kategori)
        if ($request->filled('boyut')) {
            $query->whereIn('boyut', $request->input('boyut'));
        }

        // Fiyat aralığı filtresi
    if ($request->filled('min_fiyat') && $request->filled('max_fiyat')) {
        $query->whereBetween('fiyat', [$request->input('min_fiyat'), $request->input('max_fiyat')]);
    }


        if ($request->filled('kategori')) {
            $query->where('kategori', $request->input('kategori'));
        }

        // Ürünleri sayfalama ile alıyoruz (2 ürün sayfa başına)
        $products = $query->paginate(2);

        // Sayfalama linklerine filtreleri ekliyoruz
        $products->appends($request->all());

        // Kategorileri alıyoruz (filtreleme için)
        $kategoriler = urunler::all();

        // Verileri view'e gönderiyoruz
        return view('shop-grid-left-sidebar', compact('products', 'kategoriler'));
    }






    public function adminurunekle()
    {
        return view('admin.add-products');
    }
    public function kategoriFiltre($kategori)
{
    $products = urunler::where('kategori', $kategori)->paginate(2);
   //$sira = $products->paginate(2); // Sayfa başına 2 ürün
    $kategoriler = urunler::all();

    return view('shop-grid-left-sidebar', compact('kategoriler','products'));
}

public function ozelGunFiltre($ozel_gun)
{
    $products = urunler::where('ozel_gun', $ozel_gun)->paginate(2);
    $kategoriler = urunler::all();
   // $sira = $products->paginate(2); // Sayfa başına 2 ürün
    return view('shop-grid-left-sidebar', compact('kategoriler','products'));
}



}
