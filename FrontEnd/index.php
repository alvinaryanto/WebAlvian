<?php
// Membaca file .env secara manual dan sederhana
if (file_exists('.env')) {
    $lines = file('.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue;
        list($name, $value) = explode('=', $line, 2);
        $_ENV[trim($name)] = trim($value);
    }
}

// Mengambil konfigurasi dari .env (menggunakan port 3307 yang sudah kita setel)
$host = isset($_ENV['DB_HOST']) ? $_ENV['DB_HOST'] : '127.0.0.1';
$user = isset($_ENV['DB_USER']) ? $_ENV['DB_USER'] : 'root';
$pass = isset($_ENV['DB_PASSWORD']) ? $_ENV['DB_PASSWORD'] : '';
$db   = isset($_ENV['DB_NAME']) ? $_ENV['DB_NAME'] : 'portfolio_db';
$port = isset($_ENV['DB_PORT']) ? $_ENV['DB_PORT'] : '3307';

// Membuat koneksi ke MariaDB/MySQL
$conn = new mysqli($host, $user, $pass, $db, $port);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}
?>


<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Michael Alvian</title>
    <link href="asset/css/bootstrap.css" rel="stylesheet" />
    <link href="asset/css/style.css" rel="stylesheet" />
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container section-wrap">
            <div class="logo">
                <img src="asset/img/LOGO1.png" alt="LOGO">
            </div>
            <p class="h4 px-3">Michael Alvian</p>
            <button class="navbar-toggler ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
                aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto gap-3">
                    <li class="nav-item"><a class="nav-link" href="#hero">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">My Project</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO CAROUSEL -->
    <section id="hero" class="py-5">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="asset/img/hero.jpg" class="d-block w-100 hero-img" alt="Slide 1">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Pos 2 - Bukit Mongkrang</h5>
                        <p>Kecintaan terhadap Tuhan dan dan ciptaannya.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="asset/img/bg-2.png" class="d-block w-100 hero-img" alt="Slide 2">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Gadget & Catatan</h5>
                        <p>Dalam diriku selalu ada rasa ingin tau.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="asset/img/bg-1.png" class="d-block w-100 hero-img" alt="Slide 3">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Mouse & Keyboard</h5>
                        <p>Diriku lahir untuk menggerakkan dan membuat.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

        <!-- MY PROJECT -->
    <section id="services" class="text-center py-5">
        <div class="container section-wrap px-4">
            <span class="section-title">My Project</span>
            <div class="row g-4 mt-1">
                
                <?php
                // Mengambil data proyek dari tabel 'services'
                $query = "SELECT * FROM services";
                $result = $conn->query($query);

                if ($result->num_with_rows ?? $result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        ?>
                        <!-- Card Project Otomatis Mengikuti Data di Database -->
                        <div class="col-12 col-md-4">
                            <div class="card h-100 bg-dark text-white border-0 shadow-sm">
                                <img src="<?php echo $row['image']; ?>" class="card-img-top" alt="<?php echo $row['title']; ?>">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['title']; ?></h5>
                                    <p class="card-text"><?php echo $row['description']; ?></p>
                                    <a href="#" class="btn btn-primary">Detail</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo "<p class='text-white'>Belum ada project yang ditambahkan.</p>";
                }
                ?>

            </div>
        </div>
    </section>



    <!-- ABOUT -->
    <section id="about" class="text-center py-5">
        <div class="container section-wrap px-4">
            <span class="section-title">About Me</span>
            <p class="mb-5 col-12 col-lg-10 mx-auto text-white-50">Seorang anak pertama dari 4 bersaudara, bagi diriku
                yang paling penting adalah niatku untuk melakukan sesuatu, semua pengalaman ini membangunku di titik yang sekarang</p>
            <div class="row align-items-start justify-content-center text-start g-4">
                <div class="col-12 col-md-6">
                    <h4 class="fw-bold mb-2 text-primary heading-hover">My Life</h4>
                    <img src="asset/img/bg-3.jpg" class="img-slot-lg" alt="About Image">
                </div>
                <div class="col-12 col-md-6 text-center">
                    <h4 class="fw-bold mb-2 text-primary heading-hover">Performance</h4>
                    <div class="wave mt-3 text-start">
                        <div class="row g-3">
                            <div class="col-12 col-md-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item bg-transparent text-white">
                                        <strong>HTML & CSS</strong> — Membuat tampilan web responsif dengan Bootstrap 5
                                    </li>
                                    <li class="list-group-item bg-transparent text-white">
                                        <strong>JavaScript</strong> — Menambahkan interaktivitas pada website
                                    </li>
                                    <li class="list-group-item bg-transparent text-white">
                                        <strong>Bootstrap</strong> — Membangun layout cepat dan konsisten
                                    </li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-6">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item bg-transparent text-white">
                                        <strong>Git & GitHub</strong> — Versi kontrol dan kolaborasi
                                    </li>
                                    <li class="list-group-item bg-transparent text-white">
                                        <strong>Microsoft Office</strong> — Mengelola dokumen, data, dan presentasi
                                    </li>
                                    <li class="list-group-item bg-transparent text-white">
                                        <strong>Desain Grafis</strong> — Pengalaman dasar dengan Canva & Photoshop
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

        <!-- CONTACT -->
    <section id="contact" class="text-center py-5">
        <div class="container section-wrap px-4">
            <span class="section-title">Contact</span>
            
            <?php
            // Proses PHP untuk menyimpan data ke database saat tombol Kirim ditekan
            $notif = "";
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['kirim_pesan'])) {
                // Menangkap data dan membersihkannya dari karakter berbahaya
                $nama = $conn->real_escape_string($_POST['nama']);
                $email = $conn->secondary_email ?? $conn->real_escape_string($_POST['email']);
                $pesan = $conn->real_escape_string($_POST['pesan']);

                // Validasi sederhana agar input tidak boleh kosong
                if (!empty($nama) && !empty($email) && !empty($pesan)) {
                    $sql_insert = "INSERT INTO contacts (name, email, message) VALUES ('$nama', '$email', '$pesan')";
                    
                    if ($conn->query($sql_insert) === TRUE) {
                        $notif = "<div class='alert alert-success col-12 col-lg-8 mx-auto'>Pesan Anda berhasil dikirim dan disimpan ke database!</div>";
                    } else {
                        $notif = "<div class='alert alert-danger col-12 col-lg-8 mx-auto'>Gagal mengirim pesan: " . $conn->error . "</div>";
                    }
                } else {
                    $notif = "<div class='alert alert-warning col-12 col-lg-8 mx-auto'>Semua kolom wajib diisi!</div>";
                }
            }
            
            // Memunculkan notifikasi sukses/gagal di atas form
            echo $notif;
            ?>

            <!-- Ditambahkan action ke diri sendiri dan method POST -->
            <form action="#contact" method="POST" class="col-12 col-lg-8 mx-auto">
                <div class="row g-3">
                    <div class="col-12 col-md-6">
                        <!-- Ditambahkan atribut name="nama" -->
                        <input type="text" name="nama" class="form-control" placeholder="Nama" required />
                    </div>
                    <div class="col-12 col-md-6">
                        <!-- Ditambahkan atribut name="email" -->
                        <input type="email" name="email" class="form-control" placeholder="Email" required />
                    </div>
                    <div class="col-12">
                        <!-- Ditambahkan atribut name="pesan" -->
                        <textarea name="pesan" class="form-control" rows="4" placeholder="Pesan" required></textarea>
                    </div>
                    <div class="col-12 text-start mt-3">
                        <!-- Mengubah type menjadi submit dan menambah name -->
                        <button type="submit" name="kirim_pesan" class="btn btn-primary">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </section>


    <!-- FOOTER -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row align-items-center">
                <!-- Logo & Nama -->
                <div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
                    <img src="asset/img/LOGO1.png" alt="Logo" style="height:40px;">
                    <span class="ms-2 fw-bold">Michael Alvian</span>
                </div>

                <!-- Menu Cepat -->
                <div class="col-md-4 text-center mb-3 mb-md-0">
                    <a href="#hero" class="text-white text-decoration-none mx-2">Home</a>
                    <a href="#services" class="text-white text-decoration-none mx-2">My Project</a>
                    <a href="#about" class="text-white text-decoration-none mx-2">About</a>
                    <a href="#contact" class="text-white text-decoration-none mx-2">Contact</a>
                </div>

                <!-- Sosial Media -->
                <div class="col-md-4 text-center text-md-end">
                    <a href="#" class="text-white mx-2"><i class="bi bi-facebook">facebook</i></a>
                    <a href="#" class="text-white mx-2"><i class="bi bi-instagram">instagram</i></a>
                    <a href="#" class="text-white mx-2"><i class="bi bi-linkedin">linkedin</i></a>
                    <a href="#" class="text-white mx-2"><i class="bi bi-github">github</i></a>
                </div>
            </div>

            <hr class="border-secondary my-3">

            <!-- Copyright -->
            <div class="text-center small">
                &copy; 2025 Michael Alvian. All rights reserved.
            </div>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="asset/js/bootstrap.bundle.js"></script>
    <script src="asset/js/js.js"></script>
</body>

</html>