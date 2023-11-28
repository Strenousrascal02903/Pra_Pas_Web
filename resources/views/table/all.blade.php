@extends("layout.main")

@php
$no = 1;
@endphp

@section('content')
  <h2>Makanan</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nomor Meja</th>
        <th scope="col">Kapasitas</th>
        <th scope="col">Status</th>
        <th scope="col">Tindakan</th>
      </tr>
    </thead>
    <tbody>
      @foreach($tables as $table)
        <tr>
          <td>{{$no++}}</td>
          <td>{{$table->nomor_meja}}</td>
          <td>{{$table->kapasitas}} Orang</td>
          <td>{{$table->status_meja}}</td>
          <td>
            <a href="{{ route('table.show', ['table' => $table]) }}" class="btn btn-primary">
              <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><style>svg{fill:#ffffff}</style><path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/></svg> Detail
            </a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection
