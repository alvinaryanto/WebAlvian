@extends('app')

@section('title', 'About Me')

@section('content')
    <!-- ABOUT SECTION -->
    <section id="about" class="text-center py-5">
        <div class="container section-wrap px-4">
            <span class="section-title">About Me</span>
            <p class="mb-5 col-12 col-lg-10 mx-auto text-white-50 mt-4">
                Seorang anak pertama dari 4 bersaudara, bagi diriku yang paling penting adalah niatku untuk melakukan sesuatu, 
                semua pengalaman ini membangunku di titik yang sekarang.
            </p>
            
            <div class="row align-items-start justify-content-center text-start g-4">
                <!-- Sisi Kiri: Foto / Gambar -->
                <div class="col-12 col-md-6">
                    <h4 class="fw-bold mb-2 text-primary heading-hover">My Life</h4>
                    <img src="{{ asset('asset/img/bg-3.jpg') }}" class="img-slot-lg img-fluid rounded shadow" alt="About Image">
                </div>
                
                <!-- Sisi Kanan: Daftar Skills / Performance -->
                <div class="col-12 col-md-6">
                    <h4 class="fw-bold mb-2 text-primary heading-hover">Performance</h4>
                    <div class="wave mt-3 text-start">
                        <div class="row g-3">
                            <div class="col-12">
                                <ul class="list-group list-group-flush border border-secondary rounded">
                                    <li class="list-group-item bg-transparent text-white border-secondary">
                                        <strong>HTML & CSS</strong> — Membuat tampilan web responsif dengan Bootstrap 5
                                    </li>
                                    <li class="list-group-item bg-transparent text-white border-secondary">
                                        <strong>JavaScript</strong> — Menambahkan interaktivitas pada website
                                    </li>
                                    <li class="list-group-item bg-transparent text-white border-0">
                                        <strong>PHP & Laravel</strong> — Membangun struktur aplikasi web dinamis dan terpusat
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
