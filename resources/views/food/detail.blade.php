@extends("layout.main")

@section('content')
  <h1>Detail Makanan</h1>

  <div class="mb-3">
    <label for="image" class="form-label"></label>
    <img src="{{ URL('img/' . $food->image) }}" alt="{{ $food->nama }}" style="width: 250px; height: 200px;" class="img-thumbnail">
  </div>

  <div class="container">
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" id="nama" value="{{ $food->nama }}" disabled>
    </div>
    <div class="mb-3">
      <label for="deskripsi" class="form-label">Deskripsi</label>
      <input type="text" class="form-control" id="deskripsi" value="{{ $food->deskripsi }}" disabled>
    </div>
   
    <div class="mb-3">
      <label for="tgl_produksi" class="form-label">Tanggal Produksi</label>
      <input type="text" class="form-control" id="tgl_produksi" value="{{ $food->tgl_produksi }}" disabled>
    </div>
    <div class="mb-3">
      <label for="tgl_kadaluwarsa" class="form-label">Tanggal Kadaluwarsa</label>
      <input type="text" class="form-control" id="tgl_kadaluwarsa" value="{{ $food->tgl_kadaluwarsa }}" disabled>
    </div>
    <div class="mb-3">
      <label for="kalori" class="form-label">Kalori</label>
      <input type="text" class="form-control" id="kalori" value="{{ $food->kalori }}" disabled>
    </div>
    <div class="mb-3">
      <label for="protein" class="form-label">Protein</label>
      <input type="text" class="form-control" id="protein" value="{{ $food->protein }}" disabled>
    </div>
   
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{ route('food.index') }}" class="btn btn-secondary">Back</a>
    </div>
  </div>
  <br> <br>
@endsection
