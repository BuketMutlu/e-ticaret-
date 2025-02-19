<?php

namespace App\Http\Controllers;
use App\Models\Adresler;
use App\Models\odeme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class adresController extends Controller
{
    public function showAccountDetails()
  {
      $user = Auth::user();
          $adresler = Auth::user()->adresler()->get();
          $odemeler = Auth::user()->odemeler()->get();

            return view('my-account', ['user' => $user],compact('adresler','odemeler'));
  }

  public function updateAccountDetails(Request $request)
  {
      $user = Auth::user();

      $request->validate([
          'isim' => 'required|string|max:255',
          'soyisim' => 'required|string|max:255',
          'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
          'password' => 'required|string',
          //'yeni_sifre' => 'nullable|string|confirmed|min:8',
      ]);

      if (Hash::check($request->password, $user->password)) {
          $user->isim = $request->isim;
          $user->soyisim = $request->soyisim;
          $user->email = $request->email;




          return redirect()->back()->with('success', 'Hesap bilgileri başarıyla güncellendi.');
      } else {
          return redirect()->back()->withErrors(['password' => 'Mevcut şifre yanlış.']);
      }
  }


  public function storeaddress(Request $request)
    {
        $this->validate($request, [
            'isim' => 'required|string|max:255',
            'adres' => 'required|string|max:255',
            'telefon' => 'required|string|max:20',
        ]);

        Auth::user()->adresler()->create([
            'isim' => $request->isim,
            'adres' => $request->adres,
            'telefon' => $request->telefon,
        ]);

        return redirect()->back()->with('success', 'Adres başarıyla eklendi.');
    }
    public function updateAddress(Request $request, $id)
    {
        $this->validate($request, [
            'isim' => 'required|string|max:255',
            'adres' => 'required|string|max:255',
            'telefon' => 'required|string|max:20',
        ]);

        $adres = Auth::user()->adresler()->where('id', $id)->first();
        if ($adres) {
            $adres->update([
                'isim' => $request->isim,
                'adres' => $request->adres,
                'telefon' => $request->telefon,
            ]);

            return redirect()->back()->with('success', 'Adres başarıyla güncellendi.');

        }

        return redirect()->back()->with('error', 'Adres bulunamadı.');
    }
    public function storeodeme(Request $request)
    {
        $request->validate([
            'kart_numarasi' => 'required|string|max:19',
            'sonkullanma_tarihi' => 'required|string|max:5',
            'cvv' => 'required|string|max:4',
        ]);

        Auth::user()->odemeler()->create([

            'kart_numarasi' => $request->kart_numarasi,
            'sonkullanma_tarihi' => $request->sonkullanma_tarihi,
            'cvv' => $request->cvv,
        ]);

        return redirect()->back()->with('success', 'Ödeme bilgileri başarıyla kaydedildi.');
    }


    public function updateodeme(Request $request, $id)
    {
        $request->validate([
            'kart_numarasi' => 'required|string|max:19',
            'sonkullanma_tarihi' => 'required|string|max:5',
            'cvv' => 'required|string|max:4',
        ]);

        $odeme = Auth::user()->odemeler()->where('id', $id)->first();
        if ($odeme) {
            $odeme->update([
            'kart_numarasi' => $request->kart_numarasi,
            'sonkullanma_tarihi' => $request->sonkullanma_tarihi,
            'cvv' => $request->cvv,
        ]);

        return redirect()->back()->with('success', 'Ödeme bilgileri başarıyla güncellendi.');
        }


     }




    }



