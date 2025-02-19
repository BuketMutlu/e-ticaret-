@extends('sablon')
@section('icerik')

    <!-- Page Banner Section Start -->
    <div class="section page-banner-section" style="background-image: url({{asset('assets/images/page-banner.jpg')}}">
        <div class="container">
            <!-- Page Banner Content End -->
            <div class="page-banner-content">
                <h2 class="title">Ürün Detay</h2>

                <ul class="breadcrumb">
                    <li><a href="/">Anasayfa</a></li>
                    <li class="active">Ürün Detay</li>
                </ul>
            </div>
            <!-- Page Banner Content End -->
        </div>
    </div>
    <!-- Page Banner Section End -->

    <!-- Product Details Section Start -->
    <div class="section section-padding-02">
        <div class="container">
            <!-- Product Section Wrapper Start -->
            <div class="product-section-wrapper">
                <div class="row">
                    <div class="row">
                        <div class="col-lg-12">
                             @if(session()->get('success'))
                             <div class="alert alert-success">{{session()->get('success')}}</div>
                             @endif
                        </div>
                          </div>
                    <div class="col-lg-6">
                        <!-- Product Details Images Start -->
                        <div class="product-details-images">
                            <!-- Details Gallery Images Start -->
                            <div class="details-gallery-images" id="img-container">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide single-img zoom">
                                            <img id="udresim" src="{{asset($kategoriler->resim)}}" name="resim"  alt="Product Image" />
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Details Gallery Images End -->


                        </div>
                        <!-- Product Details Images End -->
                    </div>

                    <div class="col-lg-6">

                        <!-- Product Details Description Start -->
                        <div class="product-details-description">
                            <h4 class="product-name" name="urunadi">
                                {{ $kategoriler->urunadi}}
                            </h4>
                            <div class="price" name="fiyat">
                                <span class="sale-price">{{ $kategoriler->fiyat}}</span>
                                <!--<span class="old-price">$290.00</span>-->
                            </div>




                            <p>
                                {{ $kategoriler->aciklama}}
                            </p>
                            <form action="{{route('kartekle')}}" method="POST">
                                @csrf
                                <input type="hidden" name="urun_id" value="{{$kategoriler->id}}">
                            <div class="product-meta">
                                <div class="product-quantity d-inline-flex">
                                    <button type="button" class="sub">
                                        -
                                    </button>
                                    <input type="text" value="1" name="adet" />
                                    <button type="button" class="add">
                                        +
                                    </button>
                                </div>
                                <div class="meta-action">
                                    <button class="btn btn-dark btn-hover-primary">
                                        Sepete Ekle
                                    </button>
                                </div>
                            </form>
                            <form action="{{route('begenilenekle')}}" method="POST">
                                @csrf
                                <input type="hidden" name="urun_id" value="{{$kategoriler->id}}">
                                <div class="meta-action">
                                    <button class="action"><i class="pe-7s-like"></i></button>
                                </div>
                            </form>
                            </div>

                            <div class="product-info">

                                <div class="single-info">

                                </div>
                                <div class="single-info">

                                </div>
                            </div>
                        </div>
                        <!-- Product Details Description End -->
                    </div>
                </div>
            </div>
            <!-- Product Section Wrapper End -->
        </div>
    </div>
    <!-- Product Details Section End -->

    <!-- Product Details tab Section Start -->
    <div class="section section-padding-02">
        <div class="container">
            <!-- Product Details Tabs Start -->
            <div class="product-details-tabs">
                <ul class="nav justify-content-center">
                    <li>

                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade" id="information">
                        <!-- Information Content Start -->
                        <div class="information-content">



                        </div>
                        <!-- Information Content End -->
                    </div>
                    <div class="tab-pane fade show active" id="description">
                        <!-- Description Content Start -->
                        <div class="description-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit, sed do eiusmod tempor incididunt ut labore et
                                dolore magna aliqua. Ut enimlo ad minim veniam, quis
                                nostrud exercitation ullamco laboris nisi ut aliquip
                                ex ea commodo consequat. Duis aute irure dolor in
                                reprehen in voluptate velit esse cillum dolore eu
                                fugiat nulla pariatur. Excepteur sint occaecat
                                cupidatat non proident, sunt in culpa qui officiarty
                                deserunt mollit anim id est laborum. Sed ut
                                perspiciatis unde omnis iste natus error sit
                                voluptatem accusantium doloremque laudantiu totam
                                rem aperiam, eaque ipsa quae ab illo inventore
                                veritatis et quasi architecto beatae vitae dicta
                                sunt explicabo. Nemo enim ipsam voluptatem quia
                                voluptas sit aspernatur aut odit aut fugit,
                            </p>
                        </div>
                        <!-- Description Content End -->
                    </div>
                    <div class="tab-pane fade" id="reviews">
                        <!-- Reviews Content Start -->


                </div>
                <br>
                <br>
            </div>
            <!-- Product Details Tabs End -->
        </div>
    </div>
    <!-- Product Details tab Section End -->



    <!-- Quick View Start -->

    </div>
    <!-- Quick View End -->
@endsection


