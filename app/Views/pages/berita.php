<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Hero Section -->
<section class="d-flex align-items-center justify-content-center text-white text-center position-relative"
    style="height: 50vh; background: linear-gradient(rgba(15, 81, 50, 0.85), rgba(15, 81, 50, 0.7)), url('/asset/images/depan-masjid.jpg') center/cover no-repeat;">
    <div class="container position-relative" style="z-index: 2;" data-aos="fade-down">
        <h1 class="display-3 fw-bold mb-3">Berita & Artikel</h1>
        <p class="lead mb-0 fs-4">Informasi Terkini Seputar Masjid Annamiroh Firdaus</p>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mt-4">
                <li class="breadcrumb-item"><a href="/" class="text-white text-decoration-none">Beranda</a></li>
                <li class="breadcrumb-item active text-white-50" aria-current="page">Berita</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Main Content -->
<section class="py-5 bg-light">
    <div class="container py-4">

        <div class="row g-4 justify-content-center">
            <?php foreach ($berita as $item): ?>
                <div class="col-md-6 col-lg-4" data-aos="fade-up">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden hover-card">
                        <div class="position-relative">
                            <img src="<?= $item['img']; ?>" class="card-img-top object-fit-cover"
                                alt="<?= $item['judul']; ?>" style="height: 250px;">
                            <span class="position-absolute top-0 end-0 m-3 badge bg-success fs-6 shadow-sm">Berita</span>
                        </div>
                        <div class="card-body p-4 d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-center mb-3 text-muted">
                                <small><i class="bi bi-calendar3 me-1 text-success"></i>
                                    <?= $item['tanggal']; ?>
                                </small>
                                <small><i class="bi bi-person me-1 text-success"></i>
                                    <?= $item['penulis']; ?>
                                </small>
                            </div>
                            <h4 class="card-title fw-bold mb-3"><a href="/berita/<?= $item['slug']; ?>"
                                    class="text-dark text-decoration-none stretched-link">
                                    <?= $item['judul']; ?>
                                </a></h4>
                            <p class="card-text text-muted mb-4 small flex-grow-1">
                                <?= $item['excerpt']; ?>
                            </p>
                            <div class="d-flex align-items-center mt-auto border-top pt-3">
                                <span class="text-success fw-bold small">Baca Selengkapnya <i
                                        class="bi bi-arrow-right ms-1"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>