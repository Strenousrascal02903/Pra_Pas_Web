@extends("layout.main")

@section('content')
  <h1>Detail Drink</h1>

  <div class="mb-3">
    <label for="image" class="form-label"></label>
    <img src="{{ URL('img/' . $drink->image) }}" alt="{{ $drink->nama }}" style="width: 250px; height: 200px;" class="img-thumbnail">
  </div>

  <div class="container">
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" id="nama" value="{{ $drink->nama }}" disabled>
    </div>
    <div class="mb-3">
      <label for="deskripsi" class="form-label">Deskripsi</label>
      <input type="text" class="form-control" id="deskripsi" value="{{ $drink->deskripsi }}" disabled>
    </div>
    <div class="mb-3">
      <label for="bahan" class="form-label">Bahan</label>
      <ul>
      @foreach(json_decode($drink->bahan) as $ingredient)
            <li>{{ $ingredient }}</li>
        @endforeach
      </ul>
    </div>
    <div class="mb-3">
      <label for="tgl_produksi" class="form-label">Tanggal Produksi</label>
      <input type="text" class="form-control" id="tgl_produksi" value="{{ $drink->tgl_produksi }}" disabled>
    </div>
    <div class="mb-3">
      <label for="tgl_kadaluwarsa" class="form-label">Tanggal Kadaluwarsa</label>
      <input type="text" class="form-control" id="tgl_kadaluwarsa" value="{{ $drink->tgl_kadaluwarsa }}" disabled>
    </div>
    <div class="mb-3">
      <label for="kalori" class="form-label">Kalori</label>
      <input type="text" class="form-control" id="kalori" value="{{ $drink->kalori }}" disabled>
    </div>
    <div class="mb-3">
      <label for="protein" class="form-label">Protein</label>
      <input type="text" class="form-control" id="protein" value="{{ $drink->protein }}" disabled>
    </div>
   
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{ route('drink.index') }}" class="btn btn-secondary">Back</a>
    </div>
  </div>
  <br> <br>
@endsection
