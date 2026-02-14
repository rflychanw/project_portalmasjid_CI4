<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Hero Section -->
<section class="d-flex align-items-center justify-content-center text-white text-center position-relative"
    style="height: 60vh; background: linear-gradient(rgba(15, 81, 50, 0.85), rgba(15, 81, 50, 0.7)), url('/asset/images/quran.jpg') center/cover no-repeat;">
    <div class="container position-relative" style="z-index: 2;" data-aos="fade-down">
        <h1 class="display-3 fw-bold mb-3">Agenda & Kegiatan</h1>
        <p class="lead mb-0 fs-4">Mengisi Hari dengan Ilmu, Iman, dan Amal</p>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mt-4">
                <li class="breadcrumb-item"><a href="/" class="text-white text-decoration-none">Beranda</a></li>
                <li class="breadcrumb-item active text-white-50" aria-current="page">Kegiatan</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Main Content -->
<section class="py-5 bg-light">
    <div class="container py-4">

        <!-- Filter -->
        <div class="d-flex justify-content-center mb-5 gap-3 overflow-auto pb-2" data-aos="fade-up">
            <button class="btn btn-success rounded-pill px-4 shadow-sm fw-bold active">Semua</button>
            <button class="btn btn-white border rounded-pill px-4 shadow-sm fw-medium hover-bg-light">Kajian
                Rutin</button>
            <button class="btn btn-white border rounded-pill px-4 shadow-sm fw-medium hover-bg-light">Sosial</button>
            <button
                class="btn btn-white border rounded-pill px-4 shadow-sm fw-medium hover-bg-light">Pendidikan</button>
            <button class="btn btn-white border rounded-pill px-4 shadow-sm fw-medium hover-bg-light">Remaja</button>
        </div>

        <div class="row g-4 d-flex justify-content-center">
            <!-- Event 1 (Kajian) -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
                <div class="card h-100 border-0 shadow-sm event-card rounded-4 overflow-hidden hover-card">
                    <div class="position-relative">
                        <img src="/asset/images/kajian_masjid.png" class="card-img-top object-fit-cover"
                            alt="Kajian Tafsir"
                            onerror="this.src='https://images.unsplash.com/photo-1542810634-71277d95dcbb?auto=format&fit=crop&w=400&q=80'"
                            style="height: 250px;">
                        <span class="position-absolute top-0 end-0 m-3 badge bg-success fs-6 shadow-sm">Kajian
                            Rutin</span>
                    </div>
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3 text-muted">
                            <small><i class="bi bi-calendar3 me-1 text-success"></i> Ahad</small>
                            <small><i class="bi bi-clock me-1 text-success"></i> Ba'da Subuh</small>
                        </div>
                        <h4 class="card-title fw-bold mb-2"><a href="#"
                                class="text-dark text-decoration-none stretched-link">Tafsir Al-Qur'an Juz Amma</a></h4>
                        <p class="card-text text-muted mb-4 small">Mengkaji makna dan kandungan surat-surat pendek untuk
                            meningkatkan pemahaman Al-Qur'an dan keimanan.</p>
                        <div class="d-flex align-items-center mt-auto border-top pt-3">
                            <img src="https://ui-avatars.com/api/?name=Abdul+Hamid&background=random"
                                class="rounded-circle me-3" width="40" height="40" alt="Avatar">
                            <div>
                                <h6 class="fw-bold mb-0 small">Ust. Abdul Hamid</h6>
                                <small class="text-muted">Pemateri</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Event 2 (Remaja) -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm event-card rounded-4 overflow-hidden hover-card">
                    <div class="position-relative">
                        <img src="https://images.unsplash.com/photo-1533090161767-e6ffed986c88?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                            class="card-img-top object-fit-cover" alt="Memanah" style="height: 250px;">
                        <span class="position-absolute top-0 end-0 m-3 badge bg-warning text-dark fs-6 shadow-sm">Remaja
                            Masjid</span>
                    </div>
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3 text-muted">
                            <small><i class="bi bi-calendar3 me-1 text-warning"></i> Sabtu Pekan 1</small>
                            <small><i class="bi bi-clock me-1 text-warning"></i> 08:00 WIB</small>
                        </div>
                        <h4 class="card-title fw-bold mb-2"><a href="#"
                                class="text-dark text-decoration-none stretched-link">Olahraga Sunnah Memanah</a></h4>
                        <p class="card-text text-muted mb-4 small">Latihan rutin memanah bagi remaja masjid untuk
                            melatih fokus, kekuatan fisik, dan menghidupkan sunnah.</p>
                        <div class="d-flex align-items-center mt-auto border-top pt-3">
                            <div class="bg-light rounded-circle p-2 me-2 text-warning fw-bold"><i
                                    class="bi bi-geo-alt-fill"></i></div>
                            <small class="text-muted fw-bold">Halaman Belakang Masjid</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Event 3 (Pendidikan) -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm event-card rounded-4 overflow-hidden hover-card">
                    <div class="position-relative">
                        <img src="/asset/images/quran.jpg" class="card-img-top object-fit-cover" alt="Belajar Tahsin"
                            onerror="this.src='https://plus.unsplash.com/premium_photo-1661775756810-82dbd209fc95?auto=format&fit=crop&w=400&q=80'"
                            style="height: 250px;">
                        <span
                            class="position-absolute top-0 end-0 m-3 badge bg-info text-white fs-6 shadow-sm">Pendidikan</span>
                    </div>
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3 text-muted">
                            <small><i class="bi bi-calendar3 me-1 text-info"></i> Senin - Kamis</small>
                            <small><i class="bi bi-clock me-1 text-info"></i> 16:00 WIB</small>
                        </div>
                        <h4 class="card-title fw-bold mb-2"><a href="#"
                                class="text-dark text-decoration-none stretched-link">Belajar Membaca Al-Qur'an</a></h4>
                        <p class="card-text text-muted mb-4 small">Program intensif perbaikan bacaan (Tahsin) untuk
                            anak-anak TPA dengan metode yang menyenangkan.</p>
                        <div class="d-flex align-items-center mt-auto border-top pt-3">
                            <img src="https://ui-avatars.com/api/?name=Fatimah&background=0dcaf0&color=fff"
                                class="rounded-circle me-3" width="40" height="40" alt="Avatar">
                            <div>
                                <h6 class="fw-bold mb-0 small">Ustjh. Fatimah</h6>
                                <small class="text-muted">Pengajar TPA</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Event 4 (Sosial) -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm event-card rounded-4 overflow-hidden hover-card">
                    <div class="position-relative">
                        <img src="/asset/images/kasih-sayang.jpg" class="card-img-top object-fit-cover"
                            alt="Donor Darah"
                            onerror="this.src='https://images.unsplash.com/photo-1593113598332-cd288d649433?auto=format&fit=crop&w=400&q=80'"
                            style="height: 250px;">
                        <span
                            class="position-absolute top-0 end-0 m-3 badge bg-danger text-white fs-6 shadow-sm">Sosial</span>
                    </div>
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3 text-muted">
                            <small><i class="bi bi-calendar3 me-1 text-danger"></i> 3 Bulan Sekali</small>
                            <small><i class="bi bi-clock me-1 text-danger"></i> 09:00 WIB</small>
                        </div>
                        <h4 class="card-title fw-bold mb-2"><a href="#"
                                class="text-dark text-decoration-none stretched-link">Aksi Donor Darah</a></h4>
                        <p class="card-text text-muted mb-4 small">Setetes darah Anda nyawa bagi sesama. Bekerjasama
                            dengan PMI Kota untuk membantu ketersediaan stok darah.</p>
                        <div class="d-flex align-items-center mt-auto border-top pt-3">
                            <div class="bg-light rounded-circle p-2 me-2 text-danger fw-bold"><i
                                    class="bi bi-building"></i></div>
                            <small class="text-muted fw-bold">Aula Serbaguna Masjid</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Event 5 (Jumat Berkah) -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm event-card rounded-4 overflow-hidden hover-card">
                    <div class="position-relative">
                        <img src="/asset/images/jumaat_berkah.png" class="card-img-top object-fit-cover"
                            alt="Jumat Berkah"
                            onerror="this.src='https://images.unsplash.com/photo-1606787366850-de6330128bfc?auto=format&fit=crop&w=400&q=80'"
                            style="height: 250px;">
                        <span
                            class="position-absolute top-0 end-0 m-3 badge bg-success text-white fs-6 shadow-sm">Sosial</span>
                    </div>
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3 text-muted">
                            <small><i class="bi bi-calendar3 me-1 text-success"></i> Jumat</small>
                            <small><i class="bi bi-clock me-1 text-success"></i> 11:30 WIB</small>
                        </div>
                        <h4 class="card-title fw-bold mb-2"><a href="#"
                                class="text-dark text-decoration-none stretched-link">Jumat Berkah Berbagi</a></h4>
                        <p class="card-text text-muted mb-4 small">Mari berbagi kebahagiaan dengan sedekah makanan (nasi
                            box) untuk jamaah sholat Jumat dan kaum dhuafa.</p>
                        <div class="d-flex align-items-center mt-auto border-top pt-3">
                            <div class="bg-light rounded-circle p-2 me-2 text-success fw-bold"><i
                                    class="bi bi-basket-fill"></i></div>
                            <small class="text-muted fw-bold">Halaman Masjid</small>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Register Call to Action -->
<section class="py-5 bg-white position-relative">
    <div class="container py-4" data-aos="zoom-in">
        <div
            class="row align-items-center bg-success text-white rounded-5 p-5 position-relative overflow-hidden shadow-lg mx-lg-5">
            <!-- Ornament -->
            <div class="position-absolute top-0 start-0 w-100 h-100"
                style="background: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAwIiBoZWlnaHQ9IjIwMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJNMTAwIDBoMTAwdjEwMEgxMDBWMHptMCAxMDBoMTAwdjEwMEgxMDBWMTAwem0tMTAwIDBoMTAwdjEwMEgwVjEwMHpNMCAwaDEwMHYxMDBIMFYweiIgZmlsbD0iI2ZmZmZmZiIgZmlsbC1vcGFjaXR5PSIwLjEiLz48L3N2Zz4='); opacity: 0.1;">
            </div>

            <div class="col-lg-8 position-relative z-index-2 mb-4 mb-lg-0">
                <h2 class="fw-bold display-6 mb-3">Punya Ide Kegiatan Positif?</h2>
                <p class="lead mb-0 text-white-50">Kami senantiasa terbuka untuk kolaborasi kegiatan yang bermanfaat
                    bagi umat. Ajukan proposal kegiatan Anda.</p>
            </div>
            <div class="col-lg-4 text-lg-end position-relative z-index-2">
                <a href="/kontak" class="btn btn-warning btn-lg rounded-pill px-5 fw-bold text-dark shadow-sm">Hubungi
                    Kami</a>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>