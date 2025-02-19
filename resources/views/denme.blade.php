@foreach ($kategoriler as $kategori)
<a href="{{ route('deneme', $kategori->id)}}">{{$kategori->urunadi}}</a>
@endforeach