<h2>Beğendiğiniz Ürünler</h2>
@foreach($likedProducts as $product)
    <p>{{ $product->name }}</p>
@endforeach

<h2>Sepetinizdeki Ürünler</h2>
@foreach($cartProducts as $product)
    <p>{{ $product->name }}</p>
@endforeach
