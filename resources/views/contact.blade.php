    @extends('sablon')
    @section('icerik')
    <!-- Page Banner Section Start -->
    <div class="section page-banner-section" style="background-image: url(assets/images/iletisim.jpg)">
        <div class="container">
            <!-- Page Banner Content End -->
            <div class="page-banner-content">
                <h2 class="title">İletişim</h2>

                <ul class="breadcrumb">
                    <li><a href="/">Anasayfa</a></li>
                    <li class="active">İletişim</li>
                </ul>
            </div>
            <!-- Page Banner Content End -->
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Contact Section Start -->
    <div class="section section-padding">
        <div class="container">

            <!-- Contact Wrapper Start -->
            <div class="contact-wrapper">
                <div class="row gx-0">
                    <div class="col-lg-4">
                        <div class="contact-info">
                            <h2 class="title">İletişim Bilgileri</h2>
                            <!-- Contact Info Items Start -->
                            <div class="contact-info-items">
                                <div class="single-contact-info">
                                    <div class="info-icon">
                                        <i class="pe-7s-call"></i>
                                    </div>
                                    <div class="info-content">
                                        <p>
                                            <a href="tel:+00125458222">+0525 458 222</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="single-contact-info">
                                    <div class="info-icon">
                                        <i class="pe-7s-mail"></i>
                                    </div>
                                    <div class="info-content">
                                        <p>
                                            <a href="mailto:demo@yourmail.com">demo@gmail.com</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="single-contact-info">
                                    <div class="info-icon">
                                        <i class="pe-7s-map-marker"></i>
                                    </div>
                                    <div class="info-content">
                                        <p>Adres</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Contact Info Items End -->

                            <!-- Contact Social Start -->
                            <ul class="social">
                                <li>
                                    <a href="#"><i class="fa fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                            <!-- Contact Social End -->

                        </div>
                    </div>
                    <div class="col-lg-8">


                        <!-- Contact Form Start  -->
                        <div class="contact-form">
                            <form id="contact-form" action="{{ route('iletisimkaydet') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input type="text" name="isim" placeholder="İsim*" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input type="email" name="email" placeholder="Email*" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input type="text" name="konu" placeholder="Konu"  />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-form">
                                            <input type="text" name="telefonno" placeholder="Telefon Numarası"  />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="single-form">
                                            <textarea name="mesaj" placeholder="Mesaj Yazınız" ></textarea>
                                        </div>
                                    </div>
                                    <p class="form-message"></p>
                                    <div class="col-md-12">
                                        <div class="single-form">
                                            <button type="submit" class="btn btn-dark btn-hover-primary">
                                                Mesaj Gönder
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Contact Form End  -->
                    </div>
                </div>
            </div>
            <!-- Contact Wrapper End -->
        </div>
    </div>
    <!-- Contact Section End -->

    <!-- Contact Map Start -->
    <div class="contact-map">
        <iframe src="https://www.google.com/maps/d/u/1/embed?mid=11raXQmLuBFuTdxRrDuXKGHmZ_B7x9cBs" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- Contact Map End -->
    @endsection
