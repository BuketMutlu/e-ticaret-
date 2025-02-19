@extends('sablon')
@section('icerik')

    <!-- Slider Section Start -->
    <div class="section slider-section-02">
        <div class="slider-active">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <!-- Single Slider Start  -->
                    <div class="single-slider slider-02 swiper-slide animation-style-01" style="
                                background-image: url(assets/images/slider/slider1.jpg) ; height: 450px;
                            ">
                        <div class="container">

                        </div>
                    </div>
                    <!-- Single Slider End  -->

                    <!-- Single Slider Start  -->
                    <div class="single-slider slider-02 swiper-slide animation-style-01" style="
                                background-image: url(assets/images/slider/slider6.jpg); height: 450px;
                            ">
                        <div class="container">

                        </div>
                    </div>
                    <!-- Single Slider End  -->

                    <!-- Add Arrows -->
                    <div class="swiper-button-next">Next</div>
                    <div class="swiper-button-prev">Prev</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slider Section End -->

    <div class="row">
        <div class="row">
            <div class="col-lg-12">
                 @if(session()->get('success'))
                 <div class="alert alert-success">{{session()->get('success')}}</div>
                 @endif
            </div>
              </div>

    <!-- New Product Section Start -->
    <div class="section section-padding-02">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section-title-02 text-center">
                <h2 class="title">Ürünler</h2>
            </div>
            <!-- Section Title End -->

            <!-- Product Wrapper 02 Start -->
            <div class="product-wrapper-02">
                <!-- Product Menu Start -->

                <!-- Product Menu End -->

                <!-- Product Tabs Content Start -->
                <div class="product-tabs-content">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab1" >
                            <div class="row">

                                @foreach($kategoriler as $kategori)
                                <tr>
                                <div class="col-lg-3 col-sm-6">
                                    <!-- Single Product Start -->
                                    <div class="single-product-02">
                                            <div class="product-images">
                                                <a href="{{ route('urundetay', $kategori->id)}}"><td><img src="{{asset($kategori->resim) }}" style="width: 250px; height:250px" /></td></a>
                                        </div>
                                        <div class="product-content">
                                            <h4 class="title">
                                                <a href="{{ route('urundetay', $kategori->id)}}"><td>{{ $kategori->urunadi}}</td></a>
                                            </h4>
                                            <div class="price">
                                                <span class="sale-price"
                                                        ><td>{{$kategori->fiyat}}₺</td></span>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Single Product End -->
                                </div>
                                </tr>
                            @endforeach

    <!-- Banner Section Start -->
    <div class="section section-padding">
        <div class="container">

        </div>
    </div>
    <!-- Banner Section End -->



    <div class="row">

            <div class="col-md-12 col-md-offset-0">

                    <div class="item">
                        <div class="client-text" >
                            <p>Özel anları hatırlamanın veya her zaman aklınızda olduklarını anlatmanın somut bir ifadesi olarak sevdiklerinize takdim edebileceğiniz çiçekler, zarif görünümleri ve göz alıcı renkleriyle herkesin kalbini kazanacak muazzam hediyelerdir. Üstelik yakınlarınızın yüzlerinde görmek istediğiniz mutluluğu paha biçilemez bir gülümsemeyle birleştirecek çiçekler sayesinde siz de en az onlar kadar mutluluğun tadına varabilirsiniz. İnsana kendini ayrıcalıklı hissettiren, kendisine verilen değerin farkına varmasını sağlayan birbirinden şık detaylara sahip armağanları bulabileceğiniz Çiçek Market sayfalarında, siz de duygularınızı en doğru biçimde tasvir edecek ürünü keşfedebilirsiniz!</p>

                        </div>
        </div>

    </div>
</div>

@endsection

