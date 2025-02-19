    @extends('sablon')
    @section('icerik')
    <!-- Page Banner Section Start -->
    <div class="section page-banner-section" style="background-image: url(assets/images/resimt.jpg)">
        <div class="container">
            <!-- Page Banner Content End -->
            <div class="page-banner-content">
                <h2 class="title">Giriş</h2>

                <ul class="breadcrumb">
                    <li><a href="/">Anasayfa</a></li>
                    <li class="active">Giriş</li>
                </ul>
            </div>
            <!-- Page Banner Content End -->
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Login Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <!-- Login & Register Start -->
                    <div class="login-register-wrapper">
                        <h4 class="title">Hesabınıza Giriş yapın</h4>
                        <form  method="POST" action="{{ route('loginpost') }}">
                            @csrf
                            <div class="single-form">
                                <input type="email" name="email" placeholder="Email *" />
                            </div>
                            <div class="single-form">
                                <input type="password" name="password" placeholder="Şifre" />
                            </div>
                            <div class="single-form">
                                <input type="checkbox" id="remember" />
                                <label for="remember"><span></span>Beni hatırla</label>
                            </div>
                            <div class="single-form">
                                <button class="btn btn-primary btn-hover-dark">
                                    Giriş
                                </button>
                            </div>
                        </form>
                        <p><a href="#">Şifrenizi mi unuttunuz?</a></p>
                        <p>
                            No account?
                            <a href="{{route('register')}}">Hesabın yok ise kayıt olunuz.</a>
                        </p>
                    </div>
                    <!-- Login & Register End -->
                </div>
            </div>
        </div>
        @if($errors->any())
        {{ implode('', $errors->all('<div>:message</div>')) }}
    @endif
    </div>

    <!-- Login Section End -->
 @endsection
