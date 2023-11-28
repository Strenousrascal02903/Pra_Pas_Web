@extends("layout.main")

@section('content')
  <h1>Detail Meja</h1>

  <div class="container">
    <div class="mb-3">
      <label for="nomor_meja" class="form-label">Nomor Meja</label>
      <input type="text" class="form-control" id="nomor" value="{{ $table->nomor_meja }}" disabled>
    </div>
    <div class="mb-3">
      <label for="kapasitas" class="form-label">Kapasitas</label>
      <input type="text" class="form-control" id="kapasitas" value="{{ $table->kapasitas }}" disabled>
    </div>
   
    <div class="mb-3">
      <label for="status_meja" class="form-label">Status</label>
      <input type="text" class="form-control" id="status_meja" value="{{ $table->status_meja }}" disabled>
    </div>
    <div class="mb-3">
      <label for="tgl_pemesanan" class="form-label">Tanggal Pemesanan</label>
      <input type="text" class="form-control" id="tgl_pemesanan" value="{{ $table->tgl_pemesanan }}" disabled>
    </div>
    
   
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{ route('table.index') }}" class="btn btn-secondary">Back</a>
    </div>
  </div>
  <br> <br>
@endsection
