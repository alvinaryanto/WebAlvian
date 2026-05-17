@extends('app')

@section('title', 'Contact')

@section('content')
    <!-- CONTACT SECTION DARI WEB LAMA -->
    <section id="contact" class="text-center py-5">
        <div class="container section-wrap px-4">
            <h2 class="fw-bold mb-4 text-primary">Contact</h2>
            <p class="text-white-50 mb-5">Hubungi saya melalui formulir statis di bawah ini.</p>
            
            <form class="col-12 col-lg-8 mx-auto">
                <div class="row g-3">
                    <div class="col-12 col-md-6">
                        <input type="text" class="form-control" placeholder="Nama" />
                    </div>
                    <div class="col-12 col-md-6">
                        <input type="email" class="form-control" placeholder="Email" />
                    </div>
                    <div class="col-12">
                        <textarea class="form-control" rows="4" placeholder="Pesan"></textarea>
                    </div>
                    <div class="col-12 text-start mt-3">
                        <button type="button" class="btn btn-primary">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
