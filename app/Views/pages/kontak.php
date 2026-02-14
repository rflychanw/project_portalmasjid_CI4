<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Hero Section -->
<section class="d-flex align-items-center justify-content-center text-white text-center position-relative"
    style="height: 60vh; background: linear-gradient(rgba(15, 81, 50, 0.85), rgba(15, 81, 50, 0.7)), url('/asset/images/depan-masjid2.jpg') center/cover no-repeat;">
    <div class="container position-relative" style="z-index: 2;" data-aos="fade-down">
        <h1 class="display-3 fw-bold mb-3">Hubungi Kami</h1>
        <p class="lead mb-0 fs-4">Kami Siap Melayani Jamaah & Masyarakat</p>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mt-4">
                <li class="breadcrumb-item"><a href="/" class="text-white text-decoration-none">Beranda</a></li>
                <li class="breadcrumb-item active text-white-50" aria-current="page">Kontak</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Contact Content -->
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="row g-5">
            <!-- Contact Info -->
            <div class="col-lg-5" data-aos="fade-right">
                <div class="bg-white rounded-4 shadow-sm p-5 h-100 position-relative overflow-hidden">
                    <div class="position-absolute top-0 end-0 p-3 opacity-10">
                        <i class="bi bi-chat-quote-fill display-1 text-success"></i>
                    </div>

                    <h3 class="fw-bold text-success mb-4 text-uppercase">Informasi Kontak</h3>
                    <p class="text-muted mb-5">Jika Anda memiliki pertanyaan seputar kegiatan masjid, donasi, layanan
                        umat, atau ingin berkonsultasi, silakan hubungi kami.</p>

                    <div class="d-flex mb-4 align-items-start">
                        <div class="flex-shrink-0 btn-square bg-success text-white rounded-circle d-flex align-items-center justify-content-center shadow-sm"
                            style="width: 50px; height: 50px;">
                            <i class="bi bi-geo-alt-fill fs-5"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="fw-bold mb-1 text-dark">Alamat Masjid</h5>
                            <p class="text-muted mb-0 lh-sm">Jl. Damai Sejahtera No. 123, Kel. Kebahagiaan,<br>Jakarta
                                Selatan, 12345</p>
                        </div>
                    </div>

                    <div class="d-flex mb-4 align-items-start">
                        <div class="flex-shrink-0 btn-square bg-success text-white rounded-circle d-flex align-items-center justify-content-center shadow-sm"
                            style="width: 50px; height: 50px;">
                            <i class="bi bi-envelope-fill fs-5"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="fw-bold mb-1 text-dark">Email Kami</h5>
                            <p class="text-muted mb-0 lh-sm">info@masjidannamiroh.id</p>
                        </div>
                    </div>

                    <div class="d-flex mb-5 align-items-start">
                        <div class="flex-shrink-0 btn-square bg-success text-white rounded-circle d-flex align-items-center justify-content-center shadow-sm"
                            style="width: 50px; height: 50px;">
                            <i class="bi bi-whatsapp fs-5"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="fw-bold mb-1 text-dark">Layanan Umat</h5>
                            <p class="text-muted mb-0 lh-sm">+62 812 3456 7890 (Chat Only)</p>
                            <small class="text-muted">Senin - Ahad: 08:00 - 17:00 WIB</small>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div>
                        <h6 class="fw-bold mb-3 text-uppercase text-secondary small">Ikuti Kegiatan Kami</h6>
                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-outline-success rounded-circle shadow-sm"
                                style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;"><i
                                    class="bi bi-facebook"></i></a>
                            <a href="#" class="btn btn-outline-success rounded-circle shadow-sm"
                                style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;"><i
                                    class="bi bi-instagram"></i></a>
                            <a href="#" class="btn btn-outline-success rounded-circle shadow-sm"
                                style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;"><i
                                    class="bi bi-youtube"></i></a>
                            <a href="#" class="btn btn-outline-success rounded-circle shadow-sm"
                                style="width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;"><i
                                    class="bi bi-tiktok"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="col-lg-7" data-aos="fade-left">
                <div class="card border-0 shadow-lg p-5 bg-white rounded-4 h-100">
                    <div class="card-body p-0">
                        <h3 class="fw-bold text-success mb-2 text-uppercase">Kirim Pesan</h3>
                        <p class="text-muted mb-4">Silakan isi formulir di bawah ini, admin kami akan segera merespon
                            pesan Anda.</p>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label text-muted small fw-bold text-uppercase">Nama
                                        Lengkap</label>
                                    <input type="text" class="form-control bg-light border-0 py-3 px-4 rounded-3"
                                        id="name" placeholder="Fulan bin Fulan">
                                </div>
                                <div class="col-md-6">
                                    <label for="email"
                                        class="form-label text-muted small fw-bold text-uppercase">Email</label>
                                    <input type="email" class="form-control bg-light border-0 py-3 px-4 rounded-3"
                                        id="email" placeholder="nama@email.com">
                                </div>
                                <div class="col-12">
                                    <label for="subject"
                                        class="form-label text-muted small fw-bold text-uppercase">Subjek</label>
                                    <select class="form-select bg-light border-0 py-3 px-4 rounded-3 text-muted"
                                        id="subject">
                                        <option selected>Pilih keperluan...</option>
                                        <option value="1">Pertanyaan Umum</option>
                                        <option value="2">Konfirmasi Donasi</option>
                                        <option value="3">Konsultasi Syariah</option>
                                        <option value="4">Pendaftaran TPA</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label for="message"
                                        class="form-label text-muted small fw-bold text-uppercase">Pesan</label>
                                    <textarea class="form-control bg-light border-0 py-3 px-4 rounded-3" id="message"
                                        rows="5" placeholder="Tuliskan pesan Anda dengan detail..."></textarea>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit"
                                        class="btn btn-success w-100 py-3 fw-bold rounded-pill shadow-lg hover-scale">
                                        <i class="bi bi-send-fill me-2"></i> Kirim Pesan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map (Embedded Google Map) -->
<div class="container-fluid p-0 position-relative">
    <!-- Overlay Gradient to blend map -->
    <div class="position-absolute top-0 start-0 w-100 h-100 pointer-events-none"
        style="background: linear-gradient(to bottom, rgba(255,255,255,0) 80%, rgba(255,255,255,0.1) 100%); pointer-events: none;">
    </div>

    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126907.02534573138!2d106.77259640942542!3d-6.284102607519656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f1ec2422b423%3A0x2c04622490d18b62!2sMasjid%20Istiqlal!5e0!3m2!1sid!2sid!4v1707567891234!5m2!1sid!2sid"
        width="100%" height="450" style="border:0; filter: grayscale(20%);" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

<?= $this->endSection(); ?>