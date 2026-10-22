<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketplace Kerajinan Nusantara</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts: Fredoka (Font gemes/bulat) & Quicksand -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;600&family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Quicksand', sans-serif;
            background-color: #FDFCF9;
        }
        /* Menggunakan font gemes Fredoka untuk judul/selamat datang */
        h1, h2, h3, h5, .font-gemes {
            font-family: 'Fredoka', cursive, sans-serif;
            color: #4A3C31;
            letter-spacing: 0.5px;
        }
        .navbar-brand {
            font-family: 'Fredoka', cursive, sans-serif;
            font-weight: 600;
            color: #4A3C31 !important;
            font-size: 1.4rem;
        }
        .navbar {
            background-color: #F5F0E8 !important;
        }
        .btn-primary {
            background-color: #A38A75;
            border-color: #A38A75;
            font-family: 'Fredoka', cursive, sans-serif;
        }
        .btn-primary:hover {
            background-color: #8C735E;
            border-color: #8C735E;
        }
        .card {
            border-radius: 16px !important;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg shadow-sm border-bottom sticky-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">✨ CraftMarket Nusantara</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-3">
                    <li class="nav-item">
                        <a class="nav-link fw-bold {{ request()->routeIs('home') ? 'active text-primary' : '' }}" href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bold {{ request()->routeIs('craft.index') ? 'active text-primary' : '' }}" href="{{ route('craft.index') }}">Katalog Produk</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-fill">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-light text-center py-4 text-muted border-top mt-auto">
        <div class="container">
            <p class="fs-6 fw-bold text-secondary mb-1 font-gemes">CraftMarket Nusantara</p>
            <small>&copy; Marketplace Kerajinan | UTS Rekayasa Web</small>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>