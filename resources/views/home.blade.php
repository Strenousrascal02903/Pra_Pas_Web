@extends("layout.main")

@section('content')


<main>
    <h2>Selamat Datang di Restoran Kami</h2>
    <p>Temukan makanan dan minuman lezat untuk setiap selera!</p>
    <a href="{{ route('food.index') }}" class="btn btn-primary">Lihat Menu Makanan</a>
    <a href="{{ route('drink.index') }}" class="btn btn-primary">Lihat Menu Minuman</a>
</main>
@endsection
