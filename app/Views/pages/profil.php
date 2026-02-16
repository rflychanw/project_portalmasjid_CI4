<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Hero Section -->
<section class="d-flex align-items-center justify-content-center text-white text-center position-relative"
    style="height: 60vh; background: linear-gradient(rgba(19, 20, 20, 0.85), rgba(15, 81, 50, 0.7)), url('/asset/images/depan-masjid3.webp') center/cover repeat;">
    <div class="container position-relative" style="z-index: 2;" data-aos="fade-down">
        <h1 class="display-3 fw-bold mb-3">Tentang Kami</h1>
        <p class="lead mb-0 fs-4">Mengenal Lebih Dekat Masjid An Namiroh Firdaus</p>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mt-4">
                <li class="breadcrumb-item"><a href="/" class="text-white text-decoration-none">Beranda</a></li>
                <li class="breadcrumb-item active text-white-50" aria-current="page">Profil</li>
            </ol>
        </nav>
    </div>
</section>

<!-- History Section -->
<section class="py-5">
    <div class="container py-4">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0" data-aos="fade-left">
                <div class="position-relative">
                    <img src="/asset/images/depan-masjid2.webp" alt="Sejarah Masjid"
                        class="img-fluid rounded-4 shadow-lg w-100 object-fit-cover" style="min-height: 400px;"
                        loading="lazy">
                    <div
                        class="position-absolute bottom-0 end-0 bg-white p-4 rounded-top-start-4 shadow m-3 d-none d-md-block">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-calendar-check text-success display-4 me-3"></i>
                            <div>
                                <h5 class="fw-bold mb-0 text-success">Didirikan</h5>
                                <span class="fs-5 fw-bold text-dark">Tahun 1998</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1 pe-lg-5" data-aos="fade-right">
                <h5 class="text-success fw-bold text-uppercase mb-2">Sejarah Kami</h5>
                <h2 class="fw-bold display-6 mb-4">Tonggak Peradaban di Tengah Masyarakat</h2>
                <p class="text-secondary lh-lg mb-4">Masjid An Namiroh Firdaus didirikan pada tahun 1998 atas inisiatif
                    warga setempat yang merindukan tempat ibadah yang layak dan representatif. Bermula dari sebuah
                    musholla kecil yang sederhana, semangat gotong royong warga berhasil menyulapnya menjadi bangunan
                    megah.</p>
                <p class="text-secondary lh-lg mb-4">Renovasi besar dilakukan pada tahun 2015 dengan menambahkan lantai
                    dua dan fasilitas pendidikan untuk TPA. Kini, masjid ini tidak hanya menjadi tempat sholat, tetapi
                    juga pusat kegiatan sosial, pendidikan, dan pemberdayaan ekonomi umat.</p>
                <div class="row g-4 mt-2">
                    <div class="col-6">
                        <div class="border-start border-4 border-success ps-3">
                            <h2 class="fw-bold mb-0">1.000+</h2>
                            <p class="text-muted mb-0">Kapasitas Jamaah</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="border-start border-4 border-warning ps-3">
                            <h2 class="fw-bold mb-0">2.500 m²</h2>
                            <p class="text-muted mb-0">Luas Area</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission Section -->
<section class="py-5 bg-light position-relative overflow-hidden">
    <!-- Background Ornament -->
    <i class="bi bi-bullseye position-absolute text-success"
        style="font-size: 20rem; top: 10%; right: -5%; opacity: 0.03;"></i>

    <div class="container position-relative" style="z-index: 2;">
        <div class="text-center mb-5 mw-700 mx-auto">
            <h5 class="text-success fw-bold text-uppercase">Arah Gerak</h5>
            <h2 class="fw-bold display-6">Visi & Misi</h2>
        </div>

        <div class="row g-4 justify-content-center">
            <!-- Visi -->
            <div class="col-md-5" data-aos="flip-left">
                <div class="card h-100 border-0 shadow hover-card text-center overflow-hidden rounded-4">
                    <div class="card-header bg-success text-white py-4 border-0">
                        <div class="icon-circle bg-white text-success mx-auto d-flex align-items-center justify-content-center shadow-sm mb-0"
                            style="width: 80px; height: 80px; border-radius: 50%; margin-top: 10px; margin-bottom: -60px;">
                            <i class="bi bi-eye-fill display-5"></i>
                        </div>
                    </div>
                    <div class="card-body px-4 pt-5 pb-5 mt-3">
                        <h3 class="fw-bold text-success mb-3">Visi</h3>
                        <p class="card-text text-muted fs-5 fst-italic">"Menjadi pusat peradaban umat yang melahirkan
                            generasi beriman, berilmu, dan beramal sholeh, serta sejahtera lahir batin."</p>
                    </div>
                </div>
            </div>

            <!-- Misi -->
            <div class="col-md-7" data-aos="flip-right">
                <div class="card h-100 border-0 shadow hover-card rounded-4">
                    <div class="card-body p-5">
                        <div class="d-flex align-items-center mb-4">
                            <div class="icon-square bg-warning text-dark p-3 rounded-3 me-3">
                                <i class="bi bi-list-task fs-3"></i>
                            </div>
                            <h3 class="fw-bold text-dark mb-0">Misi Kami</h3>
                        </div>
                        <ul class="list-unstyled">
                            <li class="d-flex mb-3">
                                <i class="bi bi-check-circle-fill text-success fs-4 me-3 mt-1"></i>
                                <span class="text-muted fs-5">Menyelenggarakan peribadahan yang khusyuk, nyaman, dan
                                    sesuai syariat.</span>
                            </li>
                            <li class="d-flex mb-3">
                                <i class="bi bi-check-circle-fill text-success fs-4 me-3 mt-1"></i>
                                <span class="text-muted fs-5">Mengembangkan pendidikan Al-Qur'an dan ilmu agama bagi
                                    segala usia.</span>
                            </li>
                            <li class="d-flex mb-3">
                                <i class="bi bi-check-circle-fill text-success fs-4 me-3 mt-1"></i>
                                <span class="text-muted fs-5">Memberdayakan ekonomi umat melalui pengelolaan ZISWAF yang
                                    profesional.</span>
                            </li>
                            <li class="d-flex mb-3">
                                <i class="bi bi-check-circle-fill text-success fs-4 me-3 mt-1"></i>
                                <span class="text-muted fs-5">Mempererat ukhuwah Islamiyah dan kepedulian sosial antar
                                    warga.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Organizational Structure -->
<section class="py-5">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h5 class="text-success fw-bold text-uppercase">Pengelola</h5>
            <h2 class="fw-bold display-6">Struktur Kepengurusan DKM</h2>
            <p class="text-muted">Amanah diemban untuk melayani umat.</p>
        </div>

        <div class="row g-4 justify-content-center">
            <?php
            $pengurus = [
                ['nama' => 'H. Ahmad Dahlan', 'jabatan' => 'Ketua DKM', 'img' => 'https://ui-avatars.com/api/?name=Ahmad+Dahlan&background=198754&color=fff&size=200'],
                ['nama' => 'Ust. Ismail, Lc.', 'jabatan' => 'Imam Besar', 'img' => 'https://ui-avatars.com/api/?name=Ismail&background=0d6efd&color=fff&size=200'],
                ['nama' => 'Budi Santoso, S.Kom', 'jabatan' => 'Sekretaris', 'img' => 'https://ui-avatars.com/api/?name=Budi+Santoso&background=ffc107&color=000&size=200'],
                ['nama' => 'H. Slamet Riyadi', 'jabatan' => 'Bendahara', 'img' => 'https://ui-avatars.com/api/?name=Slamet+Riyadi&background=dc3545&color=fff&size=200'],
            ];
            foreach ($pengurus as $i => $p):
                ?>
                <div class="col-6 col-md-3" data-aos="zoom-in" data-aos-delay="<?= $i * 100; ?>">
                    <div
                        class="card border-0 shadow-sm h-100 text-center py-4 rounded-4 hover-card group-hover-effect position-relative overflow-hidden">
                        <div class="card-body">
                            <div class="d-inline-block p-1 border border-2 border-success rounded-circle mb-3">
                                <img src="<?= $p['img']; ?>" class="rounded-circle" width="120" height="120"
                                    alt="<?= $p['nama']; ?>" loading="lazy">
                            </div>
                            <h5 class="fw-bold mb-1 text-dark"><?= $p['nama']; ?></h5>
                            <p class="text-success fw-medium mb-0"><?= $p['jabatan']; ?></p>
                        </div>
                        <div class="position-absolute bottom-0 start-0 w-100 h-1 bg-success"></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-success text-white text-center">
    <div class="container" data-aos="fade-up">
        <h2 class="fw-bold mb-3">Ingin Berkontribusi?</h2>
        <p class="lead mb-4">Mari bergabung menjadi relawan atau donatur untuk kemakmuran masjid kita.</p>
        <div class="d-flex justify-content-center gap-3">
            <a href="/kontak" class="btn btn-warning btn-lg rounded-pill fw-bold text-dark px-4 shadow">Hubungi Kami</a>
            <a href="/kegiatan" class="btn btn-outline-light btn-lg rounded-pill fw-bold px-4">Lihat Kegiatan</a>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>