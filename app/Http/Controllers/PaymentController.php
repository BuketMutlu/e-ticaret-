<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Iyzipay\Options;
use Iyzipay\Request\CreatePaymentRequest;
use Iyzipay\Model\Payment;
use Iyzipay\Model\PaymentCard;
use Iyzipay\Model\Buyer;
use Iyzipay\Model\Address;
use Iyzipay\Model\BasketItem;
use Iyzipay\Model\BasketItemType;

class PaymentController extends Controller
{
    public function checkout(Request $request)
    {
        // İyzico ayarları
        $options = new Options();
        $options->setApiKey(env('IYZIPAY_API_KEY'));
        $options->setSecretKey(env('IYZIPAY_SECRET_KEY'));
        $options->setBaseUrl(env('IYZIPAY_BASE_URL'));

        // Ödeme isteği oluşturma
        $paymentRequest = new CreatePaymentRequest();
        $paymentRequest->setLocale('tr');
        $paymentRequest->setConversationId('123456789'); // Sipariş numarası
        $paymentRequest->setPrice($request->total); // Toplam tutar
        $paymentRequest->setPaidPrice($request->total); // Ödenen tutar
        $paymentRequest->setCurrency('TRY'); // Para birimi
        $paymentRequest->setInstallment(1); // Taksit sayısı, 1 taksitli işlem

        // Kart bilgileri
        $paymentCard = new PaymentCard();
        $paymentCard->setCardHolderName($request->card_name); // Kart sahibinin adı
        $paymentCard->setCardNumber($request->card_number); // Kart numarası
        $paymentCard->setExpireMonth($request->expire_month); // Son kullanım ayı
        $paymentCard->setExpireYear($request->expire_year); // Son kullanım yılı
        $paymentCard->setCvc($request->cvc); // CVV kodu
        $paymentCard->setRegisterCard(0); // Kartı kayıt etme (0: kayıt etme, 1: kayıt et)
        $paymentRequest->setPaymentCard($paymentCard);

        // Alıcı bilgileri
        $buyer = new Buyer();
        $buyer->setId($request->user()->id); // Kullanıcı ID'si
        $buyer->setName($request->user()->isim); // Kullanıcı adı
        $buyer->setSurname($request->user()->soyisim); // Kullanıcı soyadı
        $buyer->setGsmNumber($request->user()->telefon); // Kullanıcı telefon numarası
        $buyer->setEmail($request->user()->email); // Kullanıcı e-posta adresi
        $buyer->setIdentityNumber("11111111111"); // Kullanıcı kimlik numarası
        $buyer->setLastLoginDate(now()->toDateTimeString()); // Son giriş tarihi
        $buyer->setRegistrationDate($request->user()->created_at->toDateTimeString()); // Kayıt tarihi
        $buyer->setRegistrationAddress($request->adres); // Kullanıcının kayıtlı adresi
        $buyer->setIp($request->ip()); // Kullanıcı IP adresi
        $buyer->setCity("Istanbul"); // Kullanıcı şehri
        $buyer->setCountry("Turkey"); // Kullanıcı ülkesi
        $buyer->setZipCode("34732"); // Kullanıcı posta kodu
        $paymentRequest->setBuyer($buyer);

        // Teslimat adresi
        $shippingAddress = new Address();
        $shippingAddress->setContactName($request->user()->isim . ' ' . $request->user()->soyisim); // Teslimat adı soyadı
        $shippingAddress->setCity("Istanbul"); // Teslimat şehri
        $shippingAddress->setCountry("Turkey"); // Teslimat ülkesi
        $shippingAddress->setAddress($request->adres); // Teslimat adresi
        $shippingAddress->setZipCode("34742"); // Teslimat posta kodu
        $paymentRequest->setShippingAddress($shippingAddress);


        // Sepet öğeleri
        $basketItems = [];
        foreach ($request->cartItems as $item) {
            $basketItem = new BasketItem();
            $basketItem->setId($item->id); // Ürün ID'si
            $basketItem->setName($item->urun->urunadi); // Ürün adı
            $basketItem->setCategory1("Kategori Adı"); // Kategori adı
            $basketItem->setItemType(BasketItemType::PHYSICAL); // Ürün tipi (Fiziksel/Dijital)
            $basketItem->setPrice($item->urun->fiyat * $item->adet); // Ürün fiyatı * adet
            $basketItems[] = $basketItem;
        }
        $paymentRequest->setBasketItems($basketItems);

        // Ödeme işlemi
        $payment = Payment::create($paymentRequest, $options);

        // Ödeme sonucunu kontrol etme
        if ($payment->getStatus() == 'success') {
            // Ödeme başarılı
            return redirect()->route('success.page')->with('message', 'Ödeme başarılı!');
        } else {
            // Ödeme başarısız
            return redirect()->route('checkout.page')->with('error', 'Ödeme başarısız: ' . $payment->getErrorMessage());
        }
    }
}
