<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\adresController;
use App\Http\Controllers\begenilenController;
use App\Http\Controllers\iletisimController;
use App\Http\Controllers\kullaniciController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\sepetController;
use App\Http\Controllers\siparisController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\TicaretController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [TicaretController::class,'anasayfa']);

Route::get('/kart',[sepetController::class,'kart'])->name('kart');
Route::post('/kart/ekle',[sepetController::class,'add'])->name('kartekle');
Route::post('/kart/sil',[sepetController::class,'remove'])->name('kartsil');

Route::get('/begenilen',[begenilenController::class,'begenilen'])->name('begenilen');
Route::post('/begenilen/ekle',[begenilenController::class,'badd'])->name('begenilenekle');
Route::post('/begenilen/sil',[begenilenController::class,'bremove'])->name('begenilensil');

Route::get('/iletisim', [TicaretController::class,'iletisim'])->name('iletisim');

Route::post('/iletisim/kaydet', [iletisimController::class,'iletisimkaydet'])->name('iletisimkaydet');

//Route::get('/giris',[TicaretController::class,'giris']);

//Route::get('/hesabım', [TicaretController::class,'hesabım']);


Route::get('/odeme',[TicaretController::class,'odeme']);

Route::get('/urundetay/{id}',[TicaretController::class,'urundetay'])->name('urundetay');

//Route::get('/kayıt', [TicaretController::class,'kayıt']);

Route::get('/kategori',[TicaretController::class,'kategoris'])->name('kategori');




Route::get('/denme',[TicaretController::class,'denme']);
Route::get('/deneme/{id}',[TicaretController::class,'deneme'])->name('deneme');



Route::prefix('admin')->name('admin.')->group(function () {

// Admin Girişi için rota
Route::get('', [adminController::class, 'showLoginForm'])->name('adminlogin');
Route::post('/admin/login', [adminController::class, 'login'])->name('login.post');
   Route::get('index', [adminController::class, 'admin'])->name('index');
    Route::get('/locked', [adminController::class, 'kilitekran'])->name('kilitekrani');
    //Route::get('/admin/login', [adminController::class, 'giris'])->name('admin.giris');
    Route::get('product-cart', [adminController::class, 'urunkart'])->name('urunkart');
    Route::get('/product-checkout', [adminController::class, 'odeme'])->name('odeme');
    Route::get('/product-detail', [adminController::class, 'urundetay'])->name('urundetay');
    Route::get('/product-orders', [adminController::class, 'siparis'])->name('siparis');
    Route::get('/product', [adminController::class, 'urun'])->name('urun');
    Route::get('/profile', [adminController::class, 'profil'])->name('profil');
   // Route::get('/admin/signup', [adminController::class, 'kayit'])->name('admin.kayit');
    Route::get('/add-products', [adminController::class, 'adminurunekle'])->name('urunekle');
    Route::post('/add-products/post', [adminController::class, 'urunekle'])->name('uruneklepost');
    Route::get('/reset-password', [adminController::class, 'resetpasswordgoster'])->name('resetpasswordgoster');
    Route::post('/reset-password/post', [adminController::class, 'resetpassword'])->name('resetpassword');

// Ürün düzenleme formu
Route::delete('/product/{id}', [adminController::class, 'sil'])->name('urun.delete');

// Ürün güncelleme işlemi
Route::put('/product/{id}', [adminController::class, 'update'])->name('urun.update');




});



// Kayıt rotası
Route::get('register', [kullaniciController::class, 'showRegistrationForm'])->name('register');
Route::post('register/post', [kullaniciController::class, 'register'])->name('registerpost');

// Giriş rotası
Route::get('login', [kullaniciController::class, 'showLoginForm'])->name('login');
Route::post('login/post', [kullaniciController::class, 'login'])->name('loginpost');

// Çıkış rotası
Route::get('logout', [kullaniciController::class, 'logout'])->name('logout');
Route::get('/dashboard', [KullaniciController::class, 'showDashboard'])->middleware('auth')->name('dashboard');


Route::get('my-account', [adresController::class, 'showAccountDetails'])->name('hesabım')->middleware('auth');
Route::post('my-account/details', [adresController::class, 'updateAccountDetails'])->middleware('auth');

// web.php


Route::post('/adres/store', [adresController::class, 'storeaddress'])->name('adres.store');
Route::put('/adres/update/{id}', [adresController::class, 'updateaddress'])->name('adres.update');

Route::post('/odemeb/store', [adresController::class, 'storeodeme'])->name('odeme.store');
Route::put('/odemeb/{id}', [adresController::class, 'updateodeme'])->name('odeme.update');


Route::put('/cart/update/{id}', [sepetController::class, 'update'])->name('cart.update');



route::get('/ozel-gun/{ozel_gun}', [TicaretController::class, 'ozelGunFiltre'])->name('ozel__gun');
route::get('/kategoris/{kategori}', [TicaretController::class, 'kategoriFiltre'])->name('kategorifiltre');

Route::post('/my-account/sifre', [KullaniciController::class, 'updatePassword']);

Route::get('/odeme/kısmı', [siparisController::class, 'siparisFormu'])->name('siparis.form');
