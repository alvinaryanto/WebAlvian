<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Michael Alvian - @yield('title')</title>
    
    <!-- MEMANGGIL BOOTSTRAP ASLI BAWAAN PROYEK LAMA ANDA -->
    <link href="{{ asset('asset/css/bootstrap.css') }}" rel="stylesheet" />
    
    <!-- MEMANGGIL STYLE KUSTOM ANDA -->
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet" />
</head>


<body class="bg-dark text-white">
    <!-- NAVBAR / HEADER (Sama untuk semua halaman) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-secondary py-3">
        <div class="container">
            <p class="h4 px-3 mb-0 text-white fw-bold">Michael Alvian</p>
            <button class="navbar-toggler ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
                aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto gap-3">
                    <!-- url() berfungsi membuat link otomatis yang aman di Laravel -->
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/service') }}">My Project</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- KONTEN DINAMIS (Bagian tengah yang otomatis berganti tiap halaman) -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER (Sama untuk semua halaman) -->
    <footer class="bg-dark text-center py-4 border-top border-secondary mt-5">
        <div class="container">
            <p class="mb-0 text-white-50">&copy; 2026 Michael Alvian. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="{{ asset('asset/js/bootstrap.bundle.js') }}"></script>
</body>
</html>
