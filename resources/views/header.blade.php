  <!-- Header Start  -->
  <div class="header-area header-white header-sticky d-none d-lg-block">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <!-- Header Logo Start -->
                <div class="header-logo">
                    <a href="/"><img src="{{asset('assets/images/logo.jpg')}}" width="80" height="46" alt="Logo" /></a>
                </div>
                <!-- Header Logo End -->
            </div>
            <div class="col-lg-6">
                <div class="header-menu">
                    <ul class="nav-menu">
                        <li>
                            <a href="/">Anasayfa</a>

                        </li>
                        <li>
                            <a href="#">Kategori</a>
                            <ul class="mega-sub-menu">
                                <li>
                                    <div>
                                        <a href="#" class="menu-title col-md-8">Çiçekler</a>
                                    </div>


                                    <ul class="menu-item">
                                        <li>
                                            <a href="{{route('kategorifiltre','gül')}}">Gül</a>
                                        </li>
                                        <li>
                                            <a href="{{route('kategorifiltre','lale')}}">Lale</a>
                                        </li>
                                        <li>
                                            <a href="{{route('kategorifiltre','orkide')}}">Orkide</a>
                                        </li>
                                        <li>
                                            <a href="{{route('kategorifiltre','papatya')}}">Papatya</a>
                                        </li>
                                        <li><a href="{{route('kategorifiltre','ortanca')}}">Ortanca</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="menu-title"></a>

                                    <ul class="menu-item">
                                        <li><a href="{{route('kategorifiltre','Lidyum')}}">Lidyum</a></li>
                                        <li>
                                            <a href="{{route('kategorifiltre','kaktüs')}}">Kaktüs</a>
                                        </li>
                                        <li>
                                            <a href="{{route('kategorifiltre','teraryum')}}">Teraryum</a>
                                        </li>
                                        <li><a href="{{route('kategorifiltre','açelya')}}">Açelya</a></li>
                                        <li>
                                            <a href="{{route('kategorifiltre','nilüfer')}}">Nilüfer</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="menu-title"></a>

                                    <ul class="menu-item">
                                        <li><a href="{{route('kategorifiltre','akasya')}}">Akasya</a></li>
                                        <li>
                                            <a href="{{route('kategorifiltre','yasemin')}}">Yasemin</a>
                                        </li>
                                        <li>
                                            <a href="{{route('kategorifiltre','aranjman')}}">Aranjman</a>
                                        </li>
                                        <li>
                                            <a href="{{route('kategorifiltre','sukilent')}}">Sukilent</a>
                                        </li>
                                        <li>
                                            <a href="{{route('kategorifiltre','aleo vera')}}">Aleo Vera</a>
                                        </li>
                                    </ul>
                                </li>


                                <li class="">
                                <img src="{{asset('assets/images/saksı.png') }}" width="250" height="540" alt="Banner" />
                                </li>

                            </ul>
                        </li>
                        <li>
                            <a href="#">Özel günler</a>
                            <ul class="sub-menu">
                                <li><a href="{{route('ozel__gun','Anneler Günü')}}">Anneler Günü</a></li>
                                <li><a href="{{route('ozel__gun','Sevgililer Günü')}}">Sevgililer Günü</a></li>
                                <li><a href="{{route('ozel__gun','Öğretmenler Günü')}}">Öğretmenler Günü</a></li>
                                <li><a href="{{route('ozel__gun','Kadınlar Günü')}}">Kadınlar Günü</a></li>
                                <li><a href="{{route('ozel__gun','Doğum Günü')}}">Doğum Günü </a></li>
                                <li><a href="{{route('ozel__gun','Yıl Dönümü')}}">Yıl Dönümü</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route('iletisim')}}">İletişim</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <!-- Header Meta Start -->
                <div class="header-meta">
                    <div class="dropdown">
                        <a class="action" href="#" role="button" data-bs-toggle="dropdown"><i class="pe-7s-user"></i></a>

                        <ul class="dropdown-menu dropdown-profile">
                            <li><a href="{{route('hesabım')}}">Hesabım</a></li>
                            <li><a href="{{route('logout')}}">Çıkış</a></li>
                            <li><a href="{{route('login')}}">Giriş Yap</a></li>
                        </ul>
                    </div>
                    <a class="action" href="{{route('begenilen')}}"><i class="pe-7s-like"></i></a>

                    <div class="">
                        <a class="action" href="{{route('kart')}}" role="button" >
                            <i class="pe-7s-shopbag"></i>

                        </a>


                        </div>
                    </div>
                </div>
                <!-- Header Meta End -->
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Header Mobile Start -->
<div class="header-mobile section d-lg-none">
    <!-- Header Mobile top Start -->
    <div class="header-mobile-top header-sticky">
        <div class="container">
            <div class="row row-cols-3 gx-2 align-items-center">
                <div class="col">
                    <!-- Header Toggle Start -->
                    <div class="header-toggle">
                        <button class="mobile-menu-open" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                    <!-- Header Toggle End -->
                </div>
                <div class="col">
                    <!-- Header Logo Start -->
                    <div class="header-logo text-center">
                        <a href="/"><img src="{{asset('assets/images/logo.jpg') }}" width="154" height="46" alt="Logo" /></a>
                    </div>
                    <!-- Header Logo End -->
                </div>
                <div class="col">
                    <!-- Header Action Start -->
                    <div class="header-meta">
                        <div class="dropdown">
                            <a class="action" href="#" role="button" data-bs-toggle="dropdown"><i class="pe-7s-user"></i></a>

                            <ul class="dropdown-menu dropdown-profile">
                                <li>
                                    <a href="{{route('hesabım')}}">Hesabım</a>
                                </li>
                                <li><a href="{{route('login')}}">Çıkış</a></li>
                                <li><a href="{{route('login')}}">Giriş Yap</a></li>
                            </ul>
                        </div>
                        <a class="action" href="#">
                            <i class="pe-7s-shopbag"></i>
                            <span class="number">3</span>
                        </a>
                    </div>
                    <!-- Header Action End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Header Mobile top End -->

    <!-- Header Mobile Bottom End -->
    <div class="header-mobile-bottom">
        <div class="container">
            <!-- Header Search Start -->
            <div class="header-search">
                <form action="#">
                    <input type="text" placeholder="Enter your search key ... " />
                    <button><i class="pe-7s-search"></i></button>
                </form>
            </div>
            <!-- Header Search End -->
        </div>
    </div>
    <!-- Header Mobile Bottom End -->
</div>
<!-- Header Mobile End -->

<!-- off Canvas Start -->
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu">
    <div class="offcanvas-header">
        <!-- Canvas Action Start -->

        <!-- Canvas Action end -->

        <!-- Canvas Close bar Start -->
        <div class="canvas-close-bar">
            <span>Menu</span>
            <button class="menu-close" data-bs-dismiss="offcanvas">
                <i class="pe-7s-angle-left"></i>
            </button>
        </div>
        <!-- Canvas Close bar End -->
    </div>

    <div class="offcanvas-body">
        <!-- Canvas Menu Start -->
        <div class="canvas-menu">
            <nav>
                <ul class="nav-menu">
                    <li>
                        <a href="/">Anasayfa</a>

                    </li>
                    <li>
                        <a href="#">Kategori</a>
                        <ul class="mega-sub-menu">
                            <li>
                                <a href="#" class="menu-title">Çiçekler</a>

                                <ul class="menu-item">
                                    <li>
                                        <a href="{{route("kategori")}}">Gül</a>
                                    </li>
                                    <li>
                                        <a href="{{route("kategori")}}">Lale</a>
                                    </li>
                                    <li>
                                        <a href="{{route("kategori")}}">Orkide</a>
                                    </li>
                                    <li>
                                        <a href="{{route("kategori")}}">Papatya</a>
                                    </li>
                                    <li>
                                        <a href="{{route("kategori")}}">Ortanca</a>
                                    </li>
                                </ul>
                                <ul class="menu-item">
                                    <li><a href="{{route("kategori")}}">Lidyum</a></li>
                                    <li>
                                        <a href="{{route("kategori")}}">Kaktüs</a>
                                    </li>
                                    <li>
                                        <a href="{{route("kategori")}}">Teraryum</a>
                                    </li>
                                    <li><a href="{{route("kategori")}}">Açelya</a></li>
                                    <li>
                                        <a href="{{route("kategori")}}">Nilüfer</a>
                                    </li>
                                </ul>
                                <ul class="menu-item">
                                    <li><a href="{{route("kategori")}}">Akasya</a></li>
                                    <li>
                                        <a href="{{route("kategori")}}">Yasemin</a>
                                    </li>
                                    <li>
                                        <a href="{{route("kategori")}}">Aranjman</a>
                                    </li>
                                    <li>
                                        <a href="{{route("kategori")}}">Sukilent</a>
                                    </li>
                                    <li>
                                        <a href="{{route("kategori")}}">Aleo Vera</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="#" class="menu-title">Özel Günler</a>

                        <ul class="menu-item">
                            <li><a href="{{route("kategori")}}">Anneler Günü</a></li>
                            <li><a href="{{route("kategori")}}">Sevgililer Günü</a></li>
                            <li><a href="{{route("kategori")}}">Öğretmenler Günü</a></li>
                            <li><a href="{{route("kategori")}}">Kadınlar Günü</a></li>
                            <li><a href="{{route("kategori")}}">Doğum Günü</a></li>
                            <li><a href="{{route("kategori")}}">Yıl Dönümü</a></li>
                        </ul>
                    </li>

                    <li><a href="{{route('iletisim')}}">İletişim</a></li>
                </ul>
            </nav>
        </div>
        <!-- Canvas Menu End -->
    </div>
</div>
<!-- off Canvas End -->
