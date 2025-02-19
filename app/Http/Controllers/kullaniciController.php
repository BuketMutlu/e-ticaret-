<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Auth\Authenticatable;
class kullaniciController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {


        $request->validate([
            'isim' => 'required|string|max:255',
            'soyisim' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);


       $user=User::create([
            'isim' => $request->isim,
            'soyisim' => $request->soyisim,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        Auth::login($user);




        return 'eklendi';

    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            return redirect()->route('kart');
        }

        return 'E-posta veya şifre yanlış.';
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');

    }

    public function showDashboard()
    {
    $user = Auth::user();

    // Kullanıcı varsa ilişkili ürünleri al
    $likedProducts = $user ? $user->likedProducts : collect();
    $cartProducts = $user ? $user->cartProducts : collect();

    return view('dashboard', [
        'begenilen' => $likedProducts,
        'sepet' => $cartProducts,
    ]);
  }
  // KullaniciController.php
public function updatePassword(Request $request)
{
    $request->validate([
        'eski_sifre' => 'required',
        'yeni_sifre' => 'required|confirmed|min:6',
    ]);

    $user = auth()->user();

    // Eski şifreyi kontrol et
    if (!Hash::check($request->eski_sifre, $user->password)) {
        return back()->withErrors(['eski_sifre' => 'Eski şifre yanlış']);
    }

    // Şifreyi güncelle
    $user->password = Hash::make($request->yeni_sifre);
    $user->save();

    return redirect()->route('login');}



}
