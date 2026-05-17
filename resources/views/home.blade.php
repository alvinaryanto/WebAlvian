@extends('app')

@section('title', 'Home')

@section('content')
    <!-- HERO CAROUSEL -->
    <section id="hero" class="py-5">
        <div class="container section-wrap px-4"> <!-- Penyeimbang jarak kanan-kiri -->
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner rounded shadow"> <!-- Sesuai format Anda -->
                    <div class="carousel-item active">
                        <img src="{{ asset('asset/img/hero.jpg') }}" class="d-block w-100 hero-img" alt="Slide 1">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded"> <!-- Sesuai format Anda -->
                            <h5>Pos 2 - Bukit Mongkrang</h5>
                            <p>Kecintaan terhadap Tuhan dan dan ciptaannya.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('asset/img/bg-2.png') }}" class="d-block w-100 hero-img" alt="Slide 2">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded"> <!-- Sesuai format Anda -->
                            <h5>Gadget & Catatan</h5>
                            <p>Dalam diriku selalu ada rasa ingin tau.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('asset/img/bg-1.png') }}" class="d-block w-100 hero-img" alt="Slide 3">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded"> <!-- Sesuai format Anda -->
                            <h5>Mouse & Keyboard</h5>
                            <p>Diriku lahir untuk menggerakkan dan membuat.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
@endsection
