<?php

namespace App\Http\Controllers;

use App\Models\urunler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.adminlogin');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Eğer giriş başarılıysa ve adminse
            if (Auth::user()->is_admin) {
                return redirect()->route('admin.index');
            } else {
                Auth::logout(); // Admin değilse oturumu kapat
                return back()->withErrors('Bu panele yalnızca adminler giriş yapabilir.');
            }
        }

        // Giriş başarısızsa
        return back()->withErrors('Geçersiz giriş bilgileri');
    }
    public function admin()
    {
        return view('admin.index');
    }

    public function adminurunekle()
    {
        return view('admin.add-products');
    }

    public function resetpasswordgoster()
    {
        return view('admin.reset-password');
    }
    public function resetpassword(Request $request)
   {
    // Form verilerini al
    $request->validate([
        'old_password' => 'required',
        'new_password' => 'required|min:8|confirmed', // Yeni şifre ve onayının aynı olup olmadığını kontrol et
    ]);

    // Admin kullanıcıyı bul (örneğin, oturumda kim olduğunu kontrol ederek)
    $admin = Auth::user(); // veya oturumdan admin bilgilerini alın

    // Eski şifreyi kontrol et
    if (!Hash::check($request->old_password, $admin->password)) {
        return back()->withErrors(['old_password' => 'Eski şifre hatalı.']);
    }

    // Yeni şifreyi kaydet
    $admin->password = Hash::make($request->new_password);
    $admin->save();


    return redirect()->route('admin.index')->with('success', 'Şifreniz başarıyla değiştirildi.');
    }
    public function urunekle(Request $request)
    {

    $request->validate([
        'urunadi' => 'required|string|max:255',
        'boyut' => 'required|string',
        'ozel_gun' => 'required|string',
        'kategori' => 'required|string',
        'fiyat' => 'required|numeric',
        'aciklama' => 'required|string',
        'resim' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);
    $resimPath = $request->file('resim')->store('public/storage/urunler');
    $resimUrl = Storage::url($resimPath);



    urunler::create([
        'urunadi' => $request->urunadi,
        'boyut' => $request->boyut,
        'ozel_gun' => $request->ozel_gun,
        'fiyat' => $request->fiyat,
        'aciklama' => $request->aciklama,
        'resim' => $resimUrl,
        'kategori' => $request->kategori,
    ]);

    return 'Ürün başarıyla eklendi.';
}

public function urun()
    {
        $adminurunler = urunler::all(); // Tüm ürünleri çekiyoruz
        $adminurunler = urunler::orderBy('id','asc')->get();
        return view('admin.product', compact('adminurunler')); //

    }


    public function update(Request $request, $id)
    {

        $request->validate([
            'urunadi' => 'required|string|max:255',
            'fiyat' => 'required|numeric',
            'aciklama' => 'nullable|string',
            'resim' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            // diğer validasyon kuralları
        ]);

        $urun = urunler::findOrFail($id);
        if ($request->hasFile('resim')) {
            // Eski resmi sil
            if ($urun->resim) {
                Storage::delete(str_replace('/storage', 'public', $urun->resim));
            }

            // Yeni resmi yükle ve yolunu kaydet
            $resimPath = $request->file('resim')->store('public/urunler');
            $resimUrl = Storage::url($resimPath);
            $urun->resim = $resimUrl; // Dosya adını değil, tam URL'yi kaydediyoruz
        }else {
            // Yeni resim seçilmediyse, mevcut resmi koru
            $resimPath = $urun->resim;

        }
        $urun->urunadi = $request->input('urunadi');
        $urun->fiyat = $request->input('fiyat');
        $urun->aciklama = $request->input('aciklama');
        $urun->save();
   // dd($urun->all());




        return redirect()->back();
    }
    public function sil( $id)
    {

   $adminurunler= urunler::find($id);
   if($adminurunler)
   {
    $adminurunler->delete();
   }
   return redirect()->back();
    }




}

