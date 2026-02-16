<?php
function tgl_indo($tanggal)
{
    $bulan = array(
        1 =>
            'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
    );
    $pecahkan = explode('-', $tanggal);

    // variabel pecahkan 0 = tanggal
    // variabel pecahkan 1 = bulan
    // variabel pecahkan 2 = tahun

    return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
}
?>
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Hero Carousel Section -->
<section id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active" style="height: 100vh; min-height: 600px;">
            <img src="/asset/images/depan-masjid.webp" class="d-block w-100 h-100"
                style="object-fit: cover; filter: brightness(0.6);" alt="Masjid Interior">
            <div class="carousel-caption d-flex flex-column justify-content-center h-100 top-0">
                <div class="container" data-aos="fade-up" data-aos-duration="1200">
                    <h1 class="display-3 fw-bold mb-3">Selamat Datang di Masjid An Namiroh Firdaus</h1>
                    <p class="lead mb-4 fs-4">"Hanyalah yang memakmurkan masjid-masjid Allah ialah orang-orang yang
                        beriman kepada Allah dan Hari kemudian"</p>
                    <a href="#jadwal" class="btn btn-success btn-lg rounded-pill px-5 fw-bold shadow">Lihat Jadwal
                        Sholat</a>
                </div>
            </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item" style="height: 100vh; min-height: 600px;">
            <img src="/asset/images/depan-masjid2.webp" class="d-block w-100 h-100"
                style="object-fit: cover; filter: brightness(0.6);" alt="Masjid Architecture">
            <div class="carousel-caption d-flex flex-column justify-content-center h-100 top-0">
                <div class="container">
                    <h1 class="display-3 fw-bold mb-3">Pusat Peradaban Umat</h1>
                    <p class="lead mb-4 fs-4">Membangun generasi Rabbani yang berakhlak mulia dan bermanfaat bagi
                        sesama.</p>
                    <a href="/kegiatan" class="btn btn-outline-light btn-lg rounded-pill px-5 fw-bold">Lihat
                        Kegiatan</a>
                </div>
            </div>
        </div>
        <!-- Slide 3 -->
        <div class="carousel-item" style="height: 100vh; min-height: 600px;">
            <img src="/asset/images/quran.webp" class="d-block w-100 h-100"
                style="object-fit: cover; filter: brightness(0.6);" alt="Ngaji Anak">
            <div class="carousel-caption d-flex flex-column justify-content-center h-100 top-0">
                <div class="container">
                    <h1 class="display-3 fw-bold mb-3">Pendidikan Al-Qur'an</h1>
                    <p class="lead mb-4 fs-4">Mencetak generasi penghafal Al-Qur'an sejak dini melalui TPA An Namiroh.
                    </p>
                    <a href="#donasi" class="btn btn-warning btn-lg rounded-pill px-5 fw-bold text-dark">Salurkan
                        Infaq</a>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</section>

<!-- Prayer Times Section (Jadwal Sholat Hari Ini) -->
<section id="jadwal" class="py-5 bg-masjid bg-light position-relative">
    <div class="container position-relative" style="margin-top: -80px; z-index: 10;" data-aos="fade-up">
        <div class="card shadow rounded-4 border-0">
            <div class="card-body p-4 p-md-5 bg-white rounded-4">
                <div class="text-center mb-4">
                    <h2 class="fw-bold text-success">Jadwal Sholat Hari Ini</h2>
                    <p class="text-muted fs-5"><i class="bi bi-calendar-event me-2"></i><?= tgl_indo(date('Y-m-d')); ?>
                    </p>
                    <span class="badge bg-success bg-opacity-10 text-white rounded-pill px-3 py-2">
                        <i class="bi bi-clock me-1"></i> Waktu Indonesia Barat (WIB)
                    </span>
                </div>
                <div class="row justify-content-center text-center g-3">
                    <?php
                    $jadwal = [
                        ['name' => 'Imsak', 'time' => '04:25 WIB', 'icon' => 'bi-moon-stars'],
                        ['name' => 'Subuh', 'time' => '04:35 WIB', 'icon' => 'bi-sunrise'],
                        ['name' => 'Dzuhur', 'time' => '11:45 WIB', 'icon' => 'bi-sun'],
                        ['name' => 'Ashar', 'time' => '15:05 WIB', 'icon' => 'bi-brightness-high'],
                        ['name' => 'Maghrib', 'time' => '17:50 WIB', 'icon' => 'bi-sunset'],
                        ['name' => 'Isya', 'time' => '19:00 WIB', 'icon' => 'bi-moon'],
                    ];
                    foreach ($jadwal as $i => $solat): ?>
                        <div class="col-4 col-md-2" data-aos="fade-up" data-aos-delay="<?= $i * 80; ?>">
                            <div class="p-3 rounded-4 border hover-card bg-light text-center">
                                <i class="bi <?= $solat['icon']; ?> text-success fs-4 mb-2 d-block"></i>
                                <h6 class="text-success fw-bold text-uppercase mb-2 small"><?= $solat['name']; ?></h6>
                                <h4 class="fw-bold text-dark mb-0"><?= $solat['time']; ?></h4>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Link ke halaman jadwal lengkap -->
                <div class="text-center mt-4">
                    <a href="/jadwal-sholat" class="btn btn-outline-success rounded-pill px-4 fw-bold">
                        <i class="bi bi-calendar-week me-2"></i>Lihat Jadwal Lengkap 1 Bulan
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="py-5 bg-success text-white">
    <div class="container">
        <div class="row text-center g-4" data-aos="zoom-in">
            <div class="col-md-3 col-6">
                <i class="bi bi-people-fill display-4 mb-3"></i>
                <h2 class="fw-bold">500+</h2>
                <p class="fs-5">Jamaah Aktif</p>
            </div>
            <div class="col-md-3 col-6">
                <i class="bi bi-book-half display-4 mb-3"></i>
                <h2 class="fw-bold">120+</h2>
                <p class="fs-5">Santri TPA</p>
            </div>
            <div class="col-md-3 col-6">
                <i class="bi bi-heart-fill display-4 mb-3"></i>
                <h2 class="fw-bold">50+</h2>
                <p class="fs-5">Anak Yatim</p>
            </div>
            <div class="col-md-3 col-6">
                <i class="bi bi-calendar-check-fill display-4 mb-3"></i>
                <h2 class="fw-bold">10+</h2>
                <p class="fs-5">Kegiatan Rutin</p>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
                <div class="position-relative">
                    <img src="/asset/images/kasih-sayang.webp" alt="About Masjid"
                        class="img-fluid rounded-4 shadow-lg w-100" style="min-height: 400px; object-fit: cover;">
                    <div class="position-absolute bottom-0 start-0 bg-white p-4 rounded-top-end-4 shadow m-3">
                        <h1 class="text-success fw-bold display-4 mb-0">25</h1>
                        <p class="mb-0 text-muted fw-bold">Tahun Melayani</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ps-lg-5" data-aos="fade-left">
                <h5 class="text-success fw-bold text-uppercase mb-3"><i class="bi bi-info-circle-fill me-2"></i>Tentang
                    Kami</h5>
                <h2 class="display-5 fw-bold mb-4">Membangun Umat yang Berkualitas & Berakhlak</h2>
                <p class="text-muted mb-4 lead">Masjid An Namiroh Firdaus hadir bukan sekadar tempat sujud, namun
                    sebagai oase spiritual dan pusat peradaban bagi masyarakat sekitar.</p>

                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-success text-white rounded-circle p-2 me-3"><i class="bi bi-check-lg"></i>
                            </div>
                            <span class="fw-medium">Fasilitas Nyaman & AC</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-success text-white rounded-circle p-2 me-3"><i class="bi bi-check-lg"></i>
                            </div>
                            <span class="fw-medium">Kajian Ilmu Rutin</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-success text-white rounded-circle p-2 me-3"><i class="bi bi-check-lg"></i>
                            </div>
                            <span class="fw-medium">Parkir Luas & TPA</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-success text-white rounded-circle p-2 me-3"><i class="bi bi-check-lg"></i>
                            </div>
                            <span class="fw-medium">Program Sosial</span>
                        </div>
                    </div>
                </div>
                <a href="/profil" class="btn btn-outline-success btn-lg rounded-pill px-5">Profil Lengkap</a>
            </div>
        </div>
    </div>
</section>

<!-- Donation Section (New) -->
<section id="donasi" class="py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-8">
                <h5 class="text-success fw-bold text-uppercase">Infaq & Shodaqoh</h5>
                <h2 class="fw-bold mb-3">Mari Bersedekah Jariyah</h2>
                <p class="text-muted fs-5">Sisihkan sebagian harta Anda untuk pembangunan masjid dan operasional
                    kegiatan dakwah. Harta yang disedekahkan tidak akan berkurang.</p>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-5 col-lg-4" data-aos="flip-left" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm text-center p-4 rounded-4 hover-card"
                    style="border-top: 5px solid #198754 !important;">
                    <div class="card-body">
                        <div class="icon-box mb-4 text-success">
                            <i class="bi bi-bank display-4"></i>
                        </div>
                        <h4 class="fw-bold mb-1">Bank Syariah Indonesia</h4>
                        <p class="text-muted mb-3">(Kode Bank: 451)</p>
                        <h3 class="fw-bold text-success mb-2">7123 4567 8900</h3>
                        <p class="small text-muted mb-4">a.n Masjid An Namiroh Firdaus</p>
                        <button class="btn btn-success rounded-pill px-4 w-100"
                            onclick="navigator.clipboard.writeText('712345678900')"><i
                                class="bi bi-clipboard me-2"></i>Salin Rekening</button>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-lg-4" data-aos="flip-right" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm text-center p-4 rounded-4 hover-card"
                    style="border-top: 5px solid #ffc107 !important;">
                    <div class="card-body">
                        <div class="icon-box mb-4 text-warning">
                            <i class="bi bi-qr-code-scan display-4"></i>
                        </div>
                        <h4 class="fw-bold mb-3">Scan QRIS</h4>
                        <p class="text-muted mb-3">Scan menggunakan GoPay, OVO, Dana, dll</p>
                        <div class="bg-light p-3 d-inline-block rounded mb-3">
                            <i class="bi bi-qr-code display-1"></i>
                            <!-- Replace icon with real QR Image if available -->
                        </div>
                        <p class="small text-muted">Aman & Terpercaya</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Upcoming Events -->
<section class="py-5">
    <div class="container">
        <div class="d-flex justify-content-between align-items-end mb-5">
            <div>
                <h5 class="text-success fw-bold text-uppercase">Agenda</h5>
                <h2 class="fw-bold">Kegiatan Mendatang</h2>
            </div>
            <a href="/kegiatan" class="btn btn-outline-success rounded-pill d-none d-md-block">Lihat Semua</a>
        </div>

        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card border-0 shadow-sm h-100 feature-card rounded-4 overflow-hidden">
                    <div class="position-relative">
                        <img src="/asset/images/kajian_masjid.webp" class="card-img-top" alt="Kajian"
                            onerror="this.src='https://images.unsplash.com/photo-1576764402964-b8575080c541?auto=format&fit=crop&w=400&q=80'"
                            style="height: 220px; object-fit: cover;">
                        <span
                            class="position-absolute top-0 end-0 bg-warning text-dark fw-bold px-3 py-1 m-3 rounded-pill small">Mingguan</span>
                    </div>
                    <div class="card-body p-4">
                        <div class="text-success fw-bold mb-2 small"><i class="bi bi-calendar3 me-1"></i> Sabtu, 18:30
                            WIB</div>
                        <h5 class="card-title fw-bold mb-3">Kajian Rutin Kitab Riyadhus Shalihin</h5>
                        <p class="card-text text-muted mb-4">Mari perdalam ilmu agama bersama Ustadz Abdullah, membahas
                            adab dan akhlak.</p>
                        <a href="#" class="btn btn-light text-success fw-bold w-100 rounded-pill">Detail Kegiatan <i
                                class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card border-0 shadow-sm h-100 feature-card rounded-4 overflow-hidden">
                    <div class="position-relative">
                        <img src="/asset/images/jumaat_berkah.webp" class="card-img-top" alt="Jumat Berkah"
                            onerror="this.src='https://images.unsplash.com/photo-1606787366850-de6330128bfc?auto=format&fit=crop&w=400&q=80'"
                            style="height: 220px; object-fit: cover;">
                        <span
                            class="position-absolute top-0 end-0 bg-success text-white fw-bold px-3 py-1 m-3 rounded-pill small">Sosial</span>
                    </div>
                    <div class="card-body p-4">
                        <div class="text-success fw-bold mb-2 small"><i class="bi bi-calendar3 me-1"></i> Jumat, 11:30
                            WIB</div>
                        <h5 class="card-title fw-bold mb-3">Program Jumat Berkah Berbagi</h5>
                        <p class="card-text text-muted mb-4">Pembagian 100 nasi box gratis untuk jamaah sholat Jumat dan
                            kaum dhuafa.</p>
                        <a href="#" class="btn btn-light text-success fw-bold w-100 rounded-pill">Detail Kegiatan <i
                                class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card border-0 shadow-sm h-100 feature-card rounded-4 overflow-hidden">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1609599006353-e629aaabfeae?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                            class="card-img-top" alt="TPA" style="height: 220px; object-fit: cover;">
                        <span
                            class="position-absolute top-0 end-0 bg-info text-dark fw-bold px-3 py-1 m-3 rounded-pill small">Pendidikan</span>
                    </div>
                    <div class="card-body p-4">
                        <div class="text-success fw-bold mb-2 small"><i class="bi bi-calendar3 me-1"></i> Senin-Jumat,
                            16:00</div>
                        <h5 class="card-title fw-bold mb-3">Pendaftaran Santri TPA</h5>
                        <p class="card-text text-muted mb-4">Membuka pendaftaran santri baru gelombang 1 untuk anak usia
                            4-10 tahun.</p>
                        <a href="#" class="btn btn-light text-success fw-bold w-100 rounded-pill">Detail Kegiatan <i
                                class="bi bi-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-4 d-md-none">
            <a href="/kegiatan" class="btn btn-outline-success rounded-pill w-100">Lihat Semua Kegiatan</a>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h5 class="text-success fw-bold text-uppercase">Dokumentasi</h5>
            <h2 class="fw-bold">Galeri Masjid</h2>
        </div>
        <div class="row g-3" data-aos="zoom-in">
            <div class="col-md-8">
                <img src="/asset/images/sholat-jamaah.webp"
                    class="img-fluid rounded-4 h-100 w-100 object-fit-cover hover-card shadow-sm" alt="Galeri 1"
                    style="min-height: 300px; object-fit: cover;">
            </div>
            <div class="col-md-4">
                <div class="row g-3 h-100">
                    <div class="col-12 h-50">
                        <img src="/asset/images/kajian_masjid.webp"
                            class="img-fluid rounded-4 h-100 w-100 object-fit-cover hover-card shadow-sm" alt="Galeri 2"
                            style="object-fit: cover;">
                    </div>
                    <div class="col-12 h-50">
                        <img src="/asset/images/jumaat_berkah.webp"
                            class="img-fluid rounded-4 h-100 w-100 object-fit-cover hover-card shadow-sm" alt="Galeri 3"
                            style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Quotes Section -->
<section class="py-5 bg-success text-white position-relative overflow-hidden">
    <div class="container text-center position-relative" style="z-index: 2;" data-aos="fade-up">
        <i class="bi bi-quote display-1 text-white-50"></i>
        <blockquote class="blockquote mb-4">
            <p class="mb-4 display-6 fw-bold fst-italic">"Barangsiapa yang membangun masjid karena Allah, maka Allah
                akan membangunkan baginya semisal itu di syurga."</p>
            <footer class="blockquote-footer text-white fs-5"><cite title="Source Title">HR. Bukhari & Muslim</cite>
            </footer>
        </blockquote>
        <a href="#donasi" class="btn btn-warning btn-lg rounded-pill px-5 fw-bold mt-3">Mari Berinfaq</a>
    </div>
    <!-- Background Ornament -->
    <i class="bi bi-moon-stars-fill position-absolute text-white-50"
        style="font-size: 20rem; top: -5rem; right: -5rem; opacity: 0.1;"></i>
</section>

<?= $this->endSection(); ?>