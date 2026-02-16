<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $title; ?>
    </title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="icon" href="/asset/images/logo-masjid-2.webp">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/">
                <i class="bi bi-moon-stars-fill me-2 d-none d-lg-inline"></i><span class="d-none d-lg-inline">Masjid
                </span>An Namiroh Firdaus
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link <?= ($menu ?? '') == 'home' ? 'active' : ''; ?>" href="/">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($menu ?? '') == 'profil' ? 'active' : ''; ?>" href="/profil">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($menu ?? '') == 'kegiatan' ? 'active' : ''; ?>"
                            href="/kegiatan">Kegiatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($menu ?? '') == 'berita' ? 'active' : ''; ?>" href="/berita">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($menu ?? '') == 'kontak' ? 'active' : ''; ?>" href="/kontak">Hubungi
                            Kami</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Content -->
    <main>
        <?= $this->renderSection('content'); ?>
    </main>
    <!-- End Content -->

    <!-- Footer -->
    <footer class="bg-dark text-white pt-5 pb-4 mt-5">
        <div class="container text-center text-md-start">
            <div class="row text-center text-md-start">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 fw-bold text-success">Masjid An Namiroh Firdaus</h5>
                    <p>Tempat ibadah yang nyaman dan pusat kegiatan umat untuk membangun peradaban yang berakhlak mulia.
                    </p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 fw-bold text-success">Tautan</h5>
                    <p><a href="/" class="text-white" style="text-decoration: none;">Beranda</a></p>
                    <p><a href="/profil" class="text-white" style="text-decoration: none;">Profil</a></p>
                    <p><a href="/kegiatan" class="text-white" style="text-decoration: none;">Kegiatan</a></p>
                    <p><a href="/kontak" class="text-white" style="text-decoration: none;">Kontak</a></p>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 fw-bold text-success">Kontak</h5>
                    <p><i class="bi bi-geo-alt me-2"></i> Jl. Damai Sejahtera No. 123, Jakarta</p>
                    <p><i class="bi bi-envelope me-2"></i> info@masjidnuruliman.id</p>
                    <p><i class="bi bi-telephone me-2"></i> +62 812 3456 7890</p>
                </div>
            </div>

            <hr class="mb-4">

            <div class="row align-items-center">
                <div class="col-md-7 col-lg-8">
                    <p>Copyright ©2024 All rights reserved by:
                        <a href="#" style="text-decoration: none;"><strong class="text-success">Masjid An Namiroh
                                Firdaus
                            </strong></a>
                    </p>
                </div>
                <div class="col-md-5 col-lg-4">
                    <div class="text-center text-md-end">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item"><a href="#" class="btn-floating btn-sm text-white"
                                    style="font-size: 23px;"><i class="bi bi-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="btn-floating btn-sm text-white"
                                    style="font-size: 23px;"><i class="bi bi-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="btn-floating btn-sm text-white"
                                    style="font-size: 23px;"><i class="bi bi-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="btn-floating btn-sm text-white"
                                    style="font-size: 23px;"><i class="bi bi-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>

</html>