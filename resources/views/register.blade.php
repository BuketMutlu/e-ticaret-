@extends('sablon')
@section('icerik')
    <!-- Page Banner Section Start -->
    <div class="section page-banner-section" style="background-image: url(assets/images/page-banner.jpg)">
        <div class="container">
            <!-- Page Banner Content End -->
            <div class="page-banner-content">
                <h2 class="title">Kayıt Ol</h2>

                <ul class="breadcrumb">
                    <li><a href="/">Anasayfa</a></li>
                    <li class="active">Kayıt Ol</li>
                </ul>
            </div>
            <!-- Page Banner Content End -->
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Register Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <!-- Login & Register Start -->
                    <div class="login-register-wrapper">
                        <h4 class="title">Yeni Hesap Oluştur</h4>
                        <p>
                            Zaten Hesabınız var mı?
                            <a href="{{route('login')}}">Var ise Girş yapın</a>
                        </p>
                        <form method="POST" action="{{ route('registerpost') }}">
                            @csrf
                            <div class="single-form">
                                <input type="text" name="isim" placeholder="İsim" />
                            </div>
                            <div class="single-form">
                                <input type="text" name="soyisim" placeholder="Soyisim" />
                            </div>
                            <div class="single-form">
                                <input type="email" name="email" placeholder="Email Adresi *" />
                            </div>
                            <div class="single-form">
                                <input type="password" name="password" placeholder="Şifre" />
                            </div>
                            <div class="single-form">
                                <input type="password" name="password_confirmation" placeholder="Şife tekrar" />
                            </div>

                            <div class="single-form">
                                <input type="checkbox" id="newsletter" />
                                <label for="newsletter">
                                    <span></span> Sayfamıza kayıt olun
                                    <br />
                            Yeni Çİçekler, En Son Yüklenenler ve Özel Tekliflerden Haberdar Olun..</label>
                            </div>
                            <div class="single-form">
                                <button class="btn btn-primary btn-hover-dark">
                                    Kayıt Ol
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- Login & Register End -->
                </div>
            </div>
        </div>
    </div>
    @if($errors->any())
    {{ implode('', $errors->all('<div>:message</div>')) }}
@endif
    <!-- Register Section End -->
    </div>
    @endsection
