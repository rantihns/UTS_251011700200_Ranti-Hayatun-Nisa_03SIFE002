@extends('layouts.app')

@section('content')
<div class="container py-5 my-5">
    <div class="row align-items-center justify-content-center text-center">
        <div class="col-md-8 py-5 rounded-4 shadow-sm" style="background-color: #F5F0E8; background-image: radial-gradient(#E8E0D3 1.1px, transparent 1.1px); background-size: 22px 22px;">
            <p class="text-primary mb-2 fs-5 font-gemes fw-bold" style="letter-spacing: 2px;">✨ SELAMAT DATANG DI ✨</p>
            <h1 class="display-4 fw-bold text-dark mb-3">Marketplace Kerajinan Nusantara</h1>
            <p class="text-muted lead mb-4 w-75 mx-auto" style="font-family: 'Quicksand', sans-serif;">Temukan berbagai koleksi seni dan kerajinan tangan lokal pilihan dengan kualitas terbaik langsung dari pengrajinnya.</p>
            
            <!-- Identitas Mahasiswa ditaruh tepat di atas tombol -->
            <div class="mb-4 text-secondary small py-2 px-3 rounded-3 d-inline-block" style="font-family: 'Quicksand', sans-serif; background-color: rgba(255, 255, 255, 0.5);">
                <span class="me-2">👤 RANTI HAYATUN NISA</span> | 
                <span class="mx-2">🆔 251011700200</span> | 
                <span class="ms-2">🏫 03SIFE002</span>
            </div>

            <div>
                <a href="{{ route('craft.index') }}" class="btn btn-primary btn-lg rounded-pill px-5 shadow-sm">Lihat Katalog Produk &rarr;</a>
            </div>
        </div>
    </div>
</div>
@endsection