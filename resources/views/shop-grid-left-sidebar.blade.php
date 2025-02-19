@extends('sablon')
@section('icerik')

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
        checkboxes.forEach(function (checkbox) {
            checkbox.addEventListener('change', function () {
                this.form.submit();
            });
        });
    });
</script>
<!-- Page Banner Section Start -->
<div class="section page-banner-section" style="background-image: url(assets/images/ürün.jpg)">
    <div class="container">
        <!-- Page Banner Content End -->
        <div class="page-banner-content">
            <h2 class="title">Kategori</h2>

            <ul class="breadcrumb">
                <li><a href="/">Anasayfa</a></li>
                <li class="active">Kategori</li>
            </ul>
        </div>
        <!-- Page Banner Content End -->
    </div>
</div>
<!-- Page Banner Section End -->
<div class="shop-tabs">
    <ul class="nav">
        <li>
            <button class="active" data-bs-toggle="tab" data-bs-target="#grid">
                <i class="fa fa-th"></i>
            </button>
        </li>
        <li>
            <button data-bs-toggle="tab" data-bs-target="#list">
                <i class="fa fa-list"></i>
            </button>
        </li>
    </ul>
</div>
<!-- Shop Section Start -->
<div class="section section-padding">
    <div class="container">
          <div class="row">
    <div class="row">
        <div class="col-lg-12">
             @if(session()->get('success'))
             <div class="alert alert-success">{{session()->get('success')}}</div>
             @endif
        </div>
          </div>
        <!-- Product Section Wrapper Start -->
        <div class="product-section-wrapper">
            <div class="row flex-row">
                  <div class="col-lg-3">
                    <!-- Sidebar Start -->
                    <div class="sidebar">

                        <!-- Sidebar Widget Start -->

                        <!-- Sidebar Widget End -->
                        <!-- Sidebar Widget Start -->
                        <div class="widget-checkbox widget-categories">
                            <form method="GET" action="{{ route('kategori') }}">
                                <input type="hidden" name="ozel_gun" value="{{ request('ozel_gun') }}">

                                <ul class="checkbox-items">
                                    <li>
                                        <input type="checkbox" id="checkbox1" name="ozel_gunler[]" value="Anneler Günü" {{ in_array('Anneler Günü', request('ozel_gunler', [])) ? 'checked' : '' }}>
                                        <label for="checkbox1"> <span></span>Anneler Günü</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="checkbox2" name="ozel_gunler[]" value="Sevgililer Günü" {{ in_array('Sevgililer Günü', request('ozel_gunler', [])) ? 'checked' : '' }}>
                                        <label for="checkbox2"> <span></span>Sevgililer Günü</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="checkbox3" name="ozel_gunler[]" value="Öğretmenler Günü" {{ in_array('Öğretmenler Günü', request('ozel_gunler', [])) ? 'checked' : '' }}>
                                        <label for="checkbox3"> <span></span>Öğretmenler Günü</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="checkbox4" name="ozel_gunler[]" value="Kadınlar Günü" {{ in_array('Kadınlar Günü', request('ozel_gunler', [])) ? 'checked' : '' }}>
                                        <label for="checkbox4"> <span></span>Kadınlar Günü</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="checkbox5" name="ozel_gunler[]" value="Doğum Günü" {{ in_array('Doğum Günü', request('ozel_gunler', [])) ? 'checked' : '' }}>
                                        <label for="checkbox5"> <span></span>Doğum Günü</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="checkbox6" name="ozel_gunler[]" value="Yıl Dönümü" {{ in_array('Yıl Dönümü', request('ozel_gunler', [])) ? 'checked' : '' }}>
                                        <label for="checkbox6"> <span></span>Yıl Dönümü</label>
                                    </li>
                                </ul>
                                <div class="sidebar-widget">

                                        <h4 class="widget-title">Boyutunu Seçiniz</h4>

                                        <div class="widget-checkbox">
                                            <ul class="checkbox-items">
                                                <li>
                                                    <input type="checkbox" id="checkbox8"  name="boyut[]" value="Büyük Boy"  {{ in_array('Büyük Boy', request('boyut', [])) ? 'checked' : '' }}>
                                                    <label for="checkbox8"> <span></span>Büyük Boy</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="checkbox9"  name="boyut[]" value="Orta Boy" {{ in_array('Orta Boy', request('boyut', [])) ? 'checked' : '' }}>
                                                    <label for="checkbox9"> <span></span>Orta Boy</label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="checkbox10"  name="boyut[]" value="Küçük Boy" {{ in_array('Küçük Boy', request('boyut', [])) ? 'checked' : '' }}>
                                                    <label for="checkbox10"> <span></span>Küçük Boy</label>

                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="sidebar-widget">

                                             <h4 class="widget-title">Fiyat</h4>

                                             <label for="min_fiyat">Min Fiyat:</label>
                                             <input type="number" id="min_fiyat" name="min_fiyat" value="{{ request('min_fiyat') }}">

                                             <label for="max_fiyat">Max Fiyat:</label>
                                             <input type="number" id="max_fiyat" name="max_fiyat" value="{{ request('max_fiyat') }}">

                                             <div class="sidebar-widget">

                                                 <button class="btn btn-primary btn-hover-primary" type="submit">Uygula</button>
                                              </div>

                                         </div>

                                <!-- Kategori seçimleri hidden input olarak ekleniyor -->
                                <input type="hidden" name="kategori" value="{{ request('kategorifiltre') }}">
                                <input type="hidden" name="ozel_gunler[]" value="{{ request('ozel__gun') }}">


                            </form>
                        </div>
                        <!-- Sidebar Widget End -->
                        <!-- Sidebar Widget Start -->


                        <!-- Sidebar Widget End -->
                        <!-- Sidebar Widget Start -->

                        <!-- Sidebar Widget End -->


                        <!-- Sidebar Widget Start -->

                        <!-- Sidebar Widget End -->

                    </div>
                 <!-- Sidebar End -->
                </div>
                <div class="col-lg-9">
                    <div class="shop-tabs" style="float:right; border:0px">
                        <ul class="nav">
                            <li>
                                <button class="active" data-bs-toggle="tab" data-bs-target="#grid">
                                    <i class="fa fa-th"></i>
                                </button>
                            </li>
                            <li>
                                <button data-bs-toggle="tab" data-bs-target="#list">
                                    <i class="fa fa-list"></i>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <!-- Shop top Bar Start -->

                    <!-- Shop top Bar End -->

                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="grid">
                            <!-- Shop Product Wrapper Start -->
                            <div class="shop-product-wrapper">
                                <div class="row">
                                    @foreach($products as $product)
                                    <div class="col-lg-4 col-sm-6">
                                        <!-- Single Product Start -->
                                        <div class="single-product">
                                            <a href="{{ route('urundetay', $product->id)}}"><img src="{{asset($product->resim)}}" width="270" height="303" alt="product" /></a>
                                            <div class="product-content">
                                                <h4 class="title">
                                                    <a href="{{ route('urundetay', $product->id)}}">{{ $product->urunadi }}</a>
                                                </h4>
                                                <div class="price">
                                                    <span class="sale-price">{{ $product->fiyat }}</span>
                                                </div>
                                            </div>
                                            <ul class="product-meta">
                                                <li>
                                                    <a class="action" data-bs-toggle="modal" data-bs-target="#quickView{{ $product->id }}" href="#"><i class="pe-7s-search"></i></a>
                                                </li>
                                                <li>
                                                    <form action="{{ route('kartekle') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="urun_id" value="{{ $product->id }}">
                                                        <button class="action"><i class="pe-7s-shopbag"></i></button>
                                                    </form>
                                                </li>
                                                <li>
                                                    <form action="{{ route('begenilenekle') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="urun_id" value="{{ $product->id }}">
                                                        <button class="action"><i class="pe-7s-like"></i></button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Single Product End -->
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <!-- Shop Product Wrapper End -->
                        </div>
                        <div class="tab-pane fade" id="list">
                            <!-- Shop Product Wrapper Start -->
                            <div class="shop-product-wrapper">
                                @foreach($products as $product)
                                <div class="single-product-02 product-list">
                                    <div class="product-images">
                                        <a href="{{ route('urundetay', $product->id)}}"><img src="{{asset($product->resim)}}" width="270" height="303" alt="product" /></a>
                                        <ul class="product-meta">
                                            <li>
                                                <a class="action" data-bs-toggle="modal" data-bs-target="#quickView{{ $product->id }}" href="#"><i class="pe-7s-search"></i></a>
                                            </li>
                                            <li>
                                                <form action="{{route('kartekle') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="urun_id" value="{{ $product->id }}">
                                                    <button class="action"><i class="pe-7s-shopbag"></i></button>
                                                </form>
                                            </li>
                                            <li>
                                                <form action="{{ route('begenilenekle') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="urun_id" value="{{ $product->id }}">
                                                    <button class="action"><i class="pe-7s-like"></i></button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-content">
                                        <h4 class="title">
                                            <a href="{{ route('urundetay', $product->id)}}">{{ $product->urunadi }}</a>
                                        </h4>
                                        <div class="price">
                                            <span class="sale-price">{{ $product->fiyat }}</span>
                                        </div>
                                        <p>{{ $product->aciklama }}</p>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <!-- Shop Product Wrapper End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

                    <!-- Page pagination Start -->


                    <div class="page-pagination">
                        <ul class="pagination justify-content-center">
                            <li class="page-item {{ $products->onFirstPage() ? 'disabled' : '' }}">
                                <a class="page-link" href="{{ $products->previousPageUrl() }}">&laquo; Önceki</a>
                            </li>

                            @foreach ($products as $key => $product)
                                <li class="page-item {{ $products->currentPage() == $key + 1 ? 'active' : '' }}">
                                    <a class="page-link" href="{{ $products->url($key + 1) }}">{{ $key + 1 }}</a>
                                </li>
                            @endforeach

                            <li class="page-item {{ !$products->hasMorePages() ? 'disabled' : '' }}">
                                <a class="page-link" href="{{ $products->nextPageUrl() }}">Sonraki &raquo;</a>
                            </li>
                        </ul>
                    </div>

                    <!-- Page pagination End -->
                </div>

            </div>
        </div>
        <!-- Product Section Wrapper End -->
    </div>
</div>
<!-- Shop Section End -->
<!-- Quick View Start -->

@foreach($kategoriler as $kategori)
<div class="modal fade" id="quickView{{$kategori->id}}">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Quick View Images Start -->
                        <div class="quick-view-images">
                            <!-- Quick Gallery Images Start -->
                            <div class="quick-gallery-images">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="single-img">
                                                <img src="{{asset($kategori->resim)}}" alt="Product Image" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Quick Gallery Images End -->

                            <!-- Quick Gallery Thumbs Start -->
                            <div class="quick-gallery-thumbs">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <img src="{{asset($kategori->resim)}}" name="resim" alt="Product Thumbnail" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-prev">
                                    <i class="pe-7s-angle-left"></i>
                                </div>
                                <div class="swiper-button-next">
                                    <i class="pe-7s-angle-right"></i>
                                </div>
                            </div>
                            <!-- Quick Gallery Thumbs End -->
                        </div>
                        <!-- Quick View Images End -->
                    </div>

                    <div class="col-lg-6">
                        <!-- Quick View Description Start -->
                        <div class="quick-view-description">
                            <h4 class="product-name">
                                {{ $kategori->urunadi}}
                            </h4>
                            <div class="price">
                                <span class="sale-price">{{$kategori->fiyat}}</span>
                                <!--<span class="old-price">$290.00</span>-->
                            </div>
                            <div class="review-wrapper">
                                <div class="review-star">
                                    <div class="star" style="width: 80%"></div>
                                </div>
                                <p>( 1 Customer Review )</p>
                            </div>

                            <p>
                                {{$kategori->aciklama}}
                            </p>
                            <form action="{{route('kartekle')}}" method="POST">
                                @csrf
                                <input type="hidden" name="urun_id" value="{{$kategori->id}}">
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
                                    <button type="submit" class="btn btn-dark btn-hover-primary">
                                        Sepete Ekle
                                    </button>

                                </div>
                                <div class="meta-action">
                                    <a class="action" href="#"><i class="pe-7s-like"></i></a>
                                </div>

                            </div>
                        </form>
                            <div class="product-info">

                                <div class="single-info">
                                    <span class="lable">Kategori:</span>
                                    <span class="value">

                                    <a href="#">Anasayfa</a></span>
                                </div>
                                <div class="single-info">

                                </div>
                                <div class="single-info">

                                </div>
                            </div>
                        </div>
                        <!-- Quick View Description End -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- Quick View End -->
@endsection
