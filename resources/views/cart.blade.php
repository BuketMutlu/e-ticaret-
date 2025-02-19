@extends('sablon')
@section('icerik')

    <!-- Page Banner Section Start -->
    <div class="section page-banner-section" style="background-image: url(assets/images/page-banner.jpg)">
        <div class="container">
            <!-- Page Banner Content End -->
            <div class="page-banner-content">
                <h2 class="title">Sepet</h2>

                <ul class="breadcrumb">
                    <li><a href="/">Anasayfa</a></li>
                    <li class="active">Sepet</li>
                </ul>
            </div>
            <!-- Page Banner Content End -->
        </div>
    </div>

    <!-- Page Banner Section End -->

    <!-- Shopping Cart Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-12">
                     @if(session()->get('success'))
                     <div class="alert alert-success">{{session()->get('success')}}</div>
                     @endif
                </div>
                  </div>

                  <div class="cart-wrapper">
                    <!-- Cart Wrapper Start -->
                    <div class="cart-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="product-thumb">Resim</th>
                                    <th class="product-info">Ürün Bilgisi</th>
                                    <th class="product-quantity">Miktar</th>
                                    <th class="product-total-price">Fiyat</th>
                                    <th class="product-action"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($cartItems && count($cartItems) > 0)
                                    @foreach($cartItems as $item)
                                        <tr>
                                            <td class="product-thumb">
                                                <img src="{{ asset($item->urun->resim) }}" />
                                            </td>
                                            <td class="product-info">
                                                <h6 class="name">
                                                    <a href="{{ route('urundetay', $item->urun->id) }}" name="urunadi"> {{ $item->urun->urunadi }}</a>
                                                </h6>
                                                <div class="product-prices">
                                                    <span class="sale-price" name="fiyat">{{ $item->urun->fiyat }}</span>
                                                </div>
                                            </td>
                                            <td class="quantity">
                                                <div class="product-quantity d-inline-flex">
                                                    <form action="{{ route('cart.update', ['id' => $item->urun->id, 'action' => 'decrease']) }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit" class="btn btn-secondary">-</button>
                                                    </form>
                                                    <span>{{ $item->adet }}</span>

                                                    <form action="{{ route('cart.update', ['id' => $item->urun->id, 'action' => 'increase']) }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('PUT')
                                                        <button type="submit" class="btn btn-primary">+</button>

                                                    </form>
                                                </div>
                                            </td>
                                            <td class="product-total-price">
                                                <span class="price">{{$item->urun->fiyat * $item->adet  }}</span>
                                            </td>
                                            <td class="product-action">
                                                <form action="{{ route('kartsil') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="urun_id" value="{{ $item->urun->id }}">
                                                    <button type="submit" class="remove">
                                                        <i class="pe-7s-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5">Sepetiniz boş.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- Cart Wrapper End -->

                    <!-- Cart Total Start -->
                    <div style="text-align: center">
                        <span>Toplam Tutar:</span>
                        <span class="price">{{ $totalfiyat }}</span>
                    </div>

                    <!-- Cart Buttons Start -->
                    <div class="cart-btn">
                        <div class="left-btn">
                            <a href="/" class="btn btn-dark btn-hover-primary" style="margin-left: 50px;">Alışverişe Devam Et</a>
                            <a href="{{route('siparis.form')}}" class="btn btn-dark btn-hover-primary" style="margin-left: 500px;">Alışverişi Bitir</a>
                        </div>
                    </div>
                    <!-- Cart Buttons End -->
                </div>
                <!-- Cart Shipping End -->



@endsection
