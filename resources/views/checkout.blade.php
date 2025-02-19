    @extends('sablon')
    @section('icerik')

    <!-- Page Banner Section Start -->
    <div class="section page-banner-section" style="background-image: url(assets/images/page-banner.jpg)">
        <div class="container">
            <!-- Page Banner Content End -->
            <div class="page-banner-content">
                <h2 class="title">Ödeme Sayfası</h2>

                <ul class="breadcrumb">
                    <li><a href="/">Anasayfa</a></li>
                    <li class="active">Ödeme Sayfası</li>
                </ul>
            </div>
            <!-- Page Banner Content End -->
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Checkout Section Start -->
    <div class="section section-padding">
        <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="checkout-form">
                            <div class="checkout-title">
                                <h4 class="title">Fatura Bilgileri</h4>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="single-form">
                                        <input type="text" name="isim" value="{{ old('isim', $user->isim) }}" placeholder="İsim" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single-form">
                                        <input type="text" name="soyisim" value="{{ old('soyisim', $user->soyisim) }}" placeholder="Soyisim" required>
                                    </div>
                                </div>
                                <div class="single-form">
                                    <input type="email" name="email" value="{{ old('email', $user->email) }}" placeholder="Email" required>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-3">
                                    <br>Adres bilgileri:
                                </div>
                                <select name="adres" required>
                                    @foreach($adresler as $adres)
                                        <option value="{{ $adres->id }}">{{ $adres->adres }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-lg-6">
                                <div class="single-form checkbox-checkbox">
                                    <input type="checkbox" id="shipping" />
                                    <label for="shipping">
                                        <span></span> Farklı bir adrese mi gönderilsin?
                                    </label>
                                </div>
                            </div>

                            <div class="checkout-shipping" id="shipping-address" style="display: none;">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="single-form">
                                            <input type="text" name="shipping_isim" placeholder="İsim*" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="single-form">
                                            <input type="text" name="shipping_soyisim" placeholder="Soyisim*" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="single-form">
                                            <input type="text" name="shipping_company" placeholder="Şirket İsmi" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="single-form">
                                            <label class="form-label">Açık Adres*</label>
                                            <input type="text" name="shipping_address1" placeholder="İl/ilçe" />
                                            <input type="text" name="shipping_address2" placeholder="Adresi Giriniz" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="single-form">
                                            <input type="text" name="shipping_phone" placeholder="Telefon*" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="single-form">
                                            <input type="text" name="shipping_email" placeholder="Email Adres *" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="single-form">
                                            <input type="text" name="telefon" placeholder="Telefon *" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-3">
                                    <br>Kart Bilgileri:
                                </div>
                                <select name="odeme" required>
                                    @foreach($odemeler as $odeme)
                                    <option value="{{ $odeme->id }}">
                                        SKT: {{ $odeme->sonkullanma_tarihi }} - Kart Numarası: **** **** **** {{ substr($odeme->kart_numarasi, -4) }}
                                    </option>
                                @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-form checkbox-checkbox">
                                    <input type="checkbox" id="newcard" />
                                    <label for="newcard">
                                        <span></span> Yeni bir kart mı eklemek istiyorsunuz?
                                    </label>
                                </div>
                            </div>

                            <div class="checkout-newcard" id="newcard-details" style="display: none;">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="single-form">
                                            <input type="text" name="kart_numarasi" placeholder="Kart Numarası*" maxlength="16" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="single-form">
                                            <input type="text" name="sonkullanma_tarihi" placeholder="Son Kullanma Tarihi (MM/YY)*" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="single-form">
                                            <input type="text" name="cvv" placeholder="CVV*" maxlength="3" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="single-form checkout-note">
                                <label class="form-label">Sipariş Notu</label>
                                <textarea name="order_note" placeholder="Eklemek istediginiz mesajı giriniz"></textarea>
                            </div>

                            <!-- Sipariş Tamamla Butonu -->
                            <div class="single-form">
                                <button type="submit" class="btn btn-primary btn-hover-dark d-block">Siparişi Tamamla</button>
                            </div>

                        </div>
                    </div>
                </div>


                        <!-- Sepet Bilgileri -->
                        <div class="col-lg-5">
                            <div class="checkout-order">
                                <div class="checkout-title">
                                    <h4 class="title">Siparişim</h4>
                                </div>
                                <div class="checkout-order-table table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="Product-name">Ürün</th>
                                                <th class="Product-price">Fiyat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($cartItems as $item)
                                                <tr>
                                                    <td class="Product-name">
                                                        <p>{{  $item->urun->urunadi}} × {{ $item->adet }}</p>
                                                    </td>
                                                    <td class="Product-price">
                                                        <p>{{  $item->urun->fiyat * $item->adet }}TL</p>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td class="Product-name">
                                                    <p>Teslimat Türü</p>
                                                </td>
                                                <td class="Product-price">
                                                    <ul class="shipping-list">
                                                        <li class="radio">
                                                            <input type="radio" name="shipping" id="radio1" checked />
                                                            <label for="radio1"><span></span> Ücretsiz Kargo</label>
                                                        </li>
                                                        <li class="radio">
                                                            <input type="radio" name="shipping" id="radio2" />
                                                            <label for="radio2"><span></span> Alıcı Ödeme</label>
                                                        </li>
                                                    </ul>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="Product-name">
                                                    <p>Toplam</p>
                                                </td>
                                                <td class="total-price"><p>{{ number_format($totalfiyat, 2) }}TL</p></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            @if($errors->any())
            {{ implode('', $errors->all('<div>:message</div>')) }}
        @endif
    </div>

    <!-- Checkout Section End -->
   @endsection
