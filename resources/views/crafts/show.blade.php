@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="{{ asset('assets/images/' . $craft->image) }}" class="img-fluid rounded-start h-100" alt="{{ $craft->name }}" style="object-fit: cover;">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h3 class="card-title">{{ $craft->name }}</h3>
                            <p class="text-muted">Pengrajin: <strong>{{ $craft->artisan }}</strong></p>
                            <p class="text-muted">Bahan: <strong>{{ $craft->material }}</strong></p>
                            <h4 class="text-primary fw-bold mb-3">Rp {{ number_format($craft->price, 0, ',', '.') }}</h4>
                            <p class="card-text">{{ $craft->description }}</p>
                            <a href="{{ url('/') }}" class="btn btn-secondary mt-3">Kembali ke Beranda</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection