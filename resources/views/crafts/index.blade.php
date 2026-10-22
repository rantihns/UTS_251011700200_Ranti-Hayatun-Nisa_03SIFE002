@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="d-flex justify-content-between align-items-center mb-4 border-bottom pb-3">
        <div>
            <h2 class="text-dark fw-bold m-0">Katalog Daftar Produk Kerajinan</h2>
            <p class="text-muted small m-0">Jelajahi karya seni terbaik pilihan kami</p>
        </div>
        <span class="badge bg-secondary rounded-pill px-3 py-2">Total 20 Produk</span>
    </div>
    
    <div class="row">
        @foreach($crafts as $craft)
        <div class="col-md-3 mb-4">
            <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                <img src="{{ asset('assets/images/' . $craft->image) }}" class="card-img-top" alt="{{ $craft->name }}" style="height: 220px; object-fit: cover;">
                <div class="card-body text-center d-flex flex-column pt-4 pb-4">
                    <h5 class="card-title fs-5 fw-bold text-dark mb-2">{{ $crafts->firstItem() + $loop->index }}. {{ $craft->name }}</h5>
                    <p class="text-muted mb-1 small">Artisan: {{ $craft->artisan }}</p>
                    <p class="text-primary fw-bold fs-5 mt-2 mb-3">Rp {{ number_format($craft->price, 0, ',', '.') }}</p>
                    <a href="{{ route('craft.show', $craft->id) }}" class="btn btn-outline-primary btn-sm mt-auto w-75 mx-auto rounded-pill">Lihat Karya</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Tombol Pagination (Next / Previous) -->
    <div class="d-flex justify-content-center mt-4">
        {{ $crafts->links() }}
    </div>
</div>
@endsection