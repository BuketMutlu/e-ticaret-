    @extends('sablon')
    @section('icerik')
    <!-- Page Banner Section Start -->
    <div class="section page-banner-section" style="background-image: url(assets/images/hesap.jpg)">
        <div class="container">
            <!-- Page Banner Content End -->
            <div class="page-banner-content">
                <h2 class="title">Hesabım</h2>

                <ul class="breadcrumb">
                    <li><a href="/">Anasayfa</a></li>
                    <li class="active">Hesabım</li>
                </ul>
            </div>
            <!-- Page Banner Content End -->
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- My Account Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row gy-4">
                <div class="col-xl-3 col-md-4">
                    <!-- My Account Menu Start -->
                    <div class="my-account-menu">
                        <ul class="nav account-menu-list flex-column">



                            <li>
                                <a data-bs-toggle="pill" href="#pills-payment"><i class="fa fa-credit-card"></i>
                                    Ödeme Yöntemi</a>
                            </li>
                            <li>
                                <a data-bs-toggle="pill" href="#pills-address"><i class="fa fa-map-marker"></i>
                                    Adres</a>
                            </li>
                            <li>
                                <a data-bs-toggle="pill" href="#pills-account"><i class="fa fa-user"></i>
                                    Hesap Bilgileri</a>
                            </li>
                            <li>
                                <a class="active" href="{{route('logout')}}"><i class="fa fa-sign-out"></i>
                                    Çıkış</a>
                            </li>
                        </ul>
                    </div>
                    <!-- My Account Menu End -->
                </div>
                <div class="col-xl-9 col-md-8">
                    <!-- Tab content start -->
                    <div class="tab-content my-account-tab">
                        <div class="tab-pane fade show active" id="pills-dashboard">
                            <div class="my-account-dashboard account-wrapper">

                                <div class="welcome-dashboard">

                                </div>
                                <p>
                                    Hesap kontrol panelinizden adres bilgilerini ve kart bilgilerini </p>
                                  <p>ekleyebilir ve güncelleyebilirsin.</p>

                            </div>
                        </div>


                        <div class="tab-pane fade" id="pills-payment">
                            <div class="my-account-payment account-wrapper">
                                <h4 class="account-title">
                                  Ödeme Yöntemi
                                </h4>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#paymentModal">
                                    Ödeme Bilgilerini Gir
                                </button>
                               <!-- Ödeme Yöntemi Modal -->
<div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="paymentModalLabel">Ödeme Yöntemi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="{{ route('odeme.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="card_number">Kart Numarası</label>
                        <input type="text" class="form-control" id="card_number" name="kart_numarasi" placeholder="1234 5678 9012 3456" required>
                    </div>
                    <div class="form-group">
                        <label for="expiration_date">Son Kullanma Tarihi (MM/YY)</label>
                        <input type="text" class="form-control" id="expiration_date" name="sonkullanma_tarihi" placeholder="MM/YY" required>
                    </div>
                    <div class="form-group">
                        <label for="cvv">CVV</label>
                        <input type="text" class="form-control" id="cvv" name="cvv" placeholder="123" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                    <button type="submit" class="btn btn-primary">Ödemeyi Tamamla</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

    @foreach($odemeler as $odeme)
    <div>
        <p>Kart Numarasi:{{ $odeme->kart_numarasi }}</p>
        <p>Son Kullanma Tarihi:{{ $odeme->sonkullanma_tarihi }}</p>
        <p>cvv:{{ $odeme->cvv }}</p>
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal1{{ $odeme->id }}">
            Düzenle
        </button>
    </div>

    <!-- Düzenleme Modal -->
    <div class="modal fade" id="editModal1{{ $odeme->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel1{{ $odeme->id }}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel1{{ $odeme->id }}">Adresi Düzenle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('odeme.update', $odeme->id) }}" method="POST">
                        @csrf
                        @method('PUT') <!-- Güncelleme işlemi için -->
                        <div class="form-group">
                            <label for="odeme{{$odeme->id}}">Kart Numarası</label>
                            <input type="text" class="form-control" id="kartn{{ $odeme->id }}" name="kart_numarasi" value="{{ $odeme->kart_numarasi }}" required>
                        </div>
                        <div class="form-group">
                            <label for="son{{ $odeme->id }}">Son Kullanma Tarihi</label>
                            <input type="text" class="form-control" id="son{{ $odeme->id }}" name="sonkullanma_tarihi" value="{{ $odeme->sonkullanma_tarihi }}" required>
                        </div>
                        <div class="form-group">
                            <label for="cvv{{ $odeme->id }}">cvv</label>
                            <input type="text" class="form-control" id="cvv{{ $odeme->id }}" name="cvv" value="{{ $odeme->cvv }}" required>
                        </div>
                        <button type="submit" class="btn btn-success">Güncelle</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
 </div>


                        <div class="tab-pane fade" id="pills-address">
                            <div class="my-account-address account-wrapper">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="account-address">

    <!-- Shop Section Start -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#adresEkleModal">
        Yeni Adres Ekle
    </button>

    <!-- Adres Ekle Modal -->
    <div class="modal fade" id="adresEkleModal" tabindex="-1" role="dialog" aria-labelledby="adresEkleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="adresEkleModalLabel">Yeni Adres Ekle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('adres.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="isim">İsim</label>
                            <input type="text" class="form-control" name="isim" required>
                        </div>
                        <div class="form-group">
                            <label for="adres">Adres</label>
                            <input type="text" class="form-control" name="adres" required>
                        </div>
                        <div class="form-group">
                            <label for="telefon">Telefon</label>
                            <input type="text" class="form-control" name="telefon" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Ekle</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @foreach($adresler as $adres)
    <div>
        <p>İsim:{{ $adres->isim }}</p>
        <p>Adres:{{ $adres->adres }}</p>
        <p>Telefon:{{ $adres->telefon }}</p>
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal{{ $adres->id }}">
            Düzenle
        </button>
    </div>

    <!-- Düzenleme Modal -->
    <div class="modal fade" id="editModal{{ $adres->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $adres->id }}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel{{ $adres->id }}">Adresi Düzenle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('adres.update', $adres->id) }}" method="POST">
                        @csrf
                        @method('PUT') <!-- Güncelleme işlemi için -->
                        <div class="form-group">
                            <label for="isim{{ $adres->id }}">İsim</label>
                            <input type="text" class="form-control" id="isim{{ $adres->id }}" name="isim" value="{{ $adres->isim }}" required>
                        </div>
                        <div class="form-group">
                            <label for="adres{{ $adres->id }}">Adres</label>
                            <input type="text" class="form-control" id="adres{{ $adres->id }}" name="adres" value="{{ $adres->adres }}" required>
                        </div>
                        <div class="form-group">
                            <label for="telefon{{ $adres->id }}">Telefon</label>
                            <input type="text" class="form-control" id="telefon{{ $adres->id }}" name="telefon" value="{{ $adres->telefon }}" required>
                        </div>
                        <button type="submit" class="btn btn-success">Güncelle</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach




    <!-- Quick View End -->
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-account">
                            <div class="my-account-details account-wrapper">
                                <h4 class="account-title">
                                   Hesap Bilgileri
                                </h4>

                                <div class="account-details">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <input type="text" name="isim" value="{{ old('isim', $user->isim) }}" placeholder="İsim" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <input type="text"  name="soyisim" value="{{ old('soyisim', $user->soyisim) }}" placeholder="Soyisim" />
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="single-form">
                                                <input type="text"  name="email" value="{{ old('email', $user->email) }}" placeholder="Email" />
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="single-form">
                                                <h5 class="title">
                                                    Şifre Değiştirme
                                                </h5>
                                            </div>
                                        </div>
                                                                                   <!-- Hata ve başarı mesajları -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
                                        <form action="{{ url('/my-account/sifre') }}" method="POST">
                                            @csrf
                                        <div class="col-md-12">
                                            <div class="single-form">
                                                <input type="password"  name="eski_sifre" id="eski_sifre" placeholder="Mevcut Şifre" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <input type="password"  name="yeni_sifre" id="yeni_sifre" placeholder="Yeni Şifre" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <input type="password" name="yeni_sifre_confirmation" id="yeni_sifre_confirmation" placeholder="Yeni şifreyi tekrar giriniz" />
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="single-form">
                                                <button class="btn btn-primary btn-hover-dark">
                                                   Kaydet
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tab content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- My Account Section End -->


  @if($errors->any())
  {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
    @endsection
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
