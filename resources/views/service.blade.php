@extends('app')

@section('title', 'My Project')

@section('content')
    <!-- MY PROJECT SECTION DARI WEB LAMA (VERSI STATIS) -->
    <section id="services" class="text-center py-5">
        <div class="container section-wrap px-4">
            <h2 class="fw-bold mb-4 text-primary">My Project</h2>
            <p class="text-white-50 mb-5">Berikut adalah beberapa proyek statis yang telah saya selesaikan.</p>
            
            <div class="row g-4">
                <!-- Project 1 -->
                <div class="col-12 col-md-4">
                    <div class="card h-100 bg-dark text-white border border-secondary shadow-sm">
                        <!-- Kita gunakan gambar placeholder online agar tampilan langsung rapi di Laravel -->
                        <img src="{{ asset('asset/img/a1.png') }}" class="card-img-top" alt="Project 1">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Website Bootstrap</h5>
                            <p class="card-text text-white-50">Project dilakukan dengan menggunakan Bootstrap 5. diampu oleh Mas Sugi, selaku instruktur pemograman.</p>
                            <a href="#" class="btn btn-primary btn-sm mt-2">Detail</a>
                        </div>
                    </div>
                </div>
                <!-- Project 2 -->
                <div class="col-12 col-md-4">
                    <div class="card h-100 bg-dark text-white border border-secondary shadow-sm">
                        <img src="{{ asset('asset/img/a2.JPG') }}" class="card-img-top" alt="Project 2">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Display Teks</h5>
                            <p class="card-text text-white-50">Project ini bertujuan untuk menampilkan teks dengan baik dan benar, serta diberi sound. diampu oleh Mas Johan, selaku instruktur protokol.</p>
                            <a href="#" class="btn btn-primary btn-sm mt-2">Detail</a>
                        </div>
                    </div>
                </div>
                <!-- Project 3 -->
                <div class="col-12 col-md-4">
                    <div class="card h-100 bg-dark text-white border border-secondary shadow-sm">
                        <img src="{{ asset('asset/img/bg-2.png') }}" class="card-img-top" alt="Project 3">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Diri Sendiri</h5>
                            <p class="card-text text-white-50">Project yang dilakukan dengan niat, usaha, dan kerja keras yang konsisten</p>
                            <a href="#" class="btn btn-primary btn-sm mt-2">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
