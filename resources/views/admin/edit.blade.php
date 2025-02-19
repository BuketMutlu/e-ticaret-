<form action="{{ route('admin.product.update', $urun->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="urunadi">Ürün Adı</label>
        <input type="text" id="urunadi" name="urunadi" class="form-control" value="{{ $urun->urunadi }}" required>
    </div>

    <div class="form-group">
        <label for="fiyat">Fiyat</label>
        <input type="text" id="fiyat" name="fiyat" class="form-control" value="{{ $urun->fiyat }}" required>
    </div>

    <div class="form-group">
        <label for="aciklama">Açıklama</label>
        <textarea id="aciklama" name="aciklama" class="form-control">{{ $urun->aciklama }}</textarea>
    </div>

    <div class="form-group">
        <label for="resim">Resim</label>
        <input type="file" id="resim" name="resim" class="form-control">
        @if($urun->resim)
            <img src="{{ asset('storage/' . $urun->resim) }}" alt="Ürün Resmi" width="100">
        @endif
    </div>

    <button type="submit" class="btn btn-primary">Güncelle</button>

</form>
