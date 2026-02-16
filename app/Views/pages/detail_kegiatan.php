<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Hero Section -->
<section class="position-relative overflow-hidden"
    style="height: 50vh; min-height: 400px; background: linear-gradient(rgba(15, 81, 50, 0.9), rgba(15, 81, 50, 0.7)), url('<?= $kegiatan['gambar']; ?>') center/cover no-repeat;">
    <div class="position-absolute top-0 start-0 w-100 h-100"
        style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 30px 30px; opacity: 0.1;">
    </div>
    <div class="container h-100 position-relative z-2 d-flex flex-column justify-content-center text-center text-white"
        data-aos="fade-down">
        <span
            class="badge bg-<?= $kegiatan['badge_color']; ?> text-<?= $kegiatan['badge_color'] == 'warning' || $kegiatan['badge_color'] == 'info' ? 'dark' : 'white'; ?> rounded-pill px-3 py-2 mb-3 fw-bold shadow-sm mx-auto"
            style="width: fit-content;">
            <i class="bi <?= $kegiatan['badge_icon']; ?> me-1"></i>
            <?= $kegiatan['badge']; ?>
        </span>
        <h1 class="display-4 fw-bold mb-3">
            <?= $kegiatan['judul']; ?>
        </h1>
        <nav aria-label="breadcrumb">
            <ol
                class="breadcrumb justify-content-center bg-white bg-opacity-10 py-2 px-4 rounded-pill d-inline-flex mb-0 backdrop-blur">
                <li class="breadcrumb-item"><a href="/" class="text-white text-decoration-none fw-medium">Beranda</a>
                </li>
                <li class="breadcrumb-item"><a href="/kegiatan"
                        class="text-white text-decoration-none fw-medium">Kegiatan</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">
                    <?= $kegiatan['judul']; ?>
                </li>
            </ol>
        </nav>
    </div>
</section>

<!-- Content Section -->
<section class="py-5 bg-light min-vh-100">
    <div class="container py-4">
        <div class="row g-5">
            <!-- Main Content -->
            <div class="col-lg-8" data-aos="fade-up">
                <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm">
                    <!-- Meta Info -->
                    <div class="d-flex flex-wrap gap-3 mb-4 text-muted border-bottom pb-4">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-calendar3 me-2 text-success"></i>
                            <span>
                                <?= $kegiatan['hari']; ?>
                            </span>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-clock me-2 text-success"></i>
                            <span>
                                <?= $kegiatan['jam']; ?>
                            </span>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-geo-alt me-2 text-success"></i>
                            <span>
                                <?= $kegiatan['lokasi']; ?>
                            </span>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-person me-2 text-success"></i>
                            <span>
                                <?= $kegiatan['pemateri']; ?>
                            </span>
                        </div>
                    </div>

                    <!-- Article Body -->
                    <article class="blog-content">
                        <?= $kegiatan['konten']; ?>
                    </article>

                    <!-- Share Buttons -->
                    <div class="mt-5 pt-4 border-top">
                        <h6 class="fw-bold mb-3">Bagikan Kegiatan Ini:</h6>
                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-outline-success rounded-circle"><i
                                    class="bi bi-whatsapp"></i></a>
                            <a href="#" class="btn btn-outline-primary rounded-circle"><i
                                    class="bi bi-facebook"></i></a>
                            <a href="#" class="btn btn-outline-info rounded-circle"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="btn btn-outline-secondary rounded-circle"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 100px;">
                    <!-- Pemateri Card -->
                    <div class="card border-0 shadow-sm rounded-4 mb-4" data-aos="fade-left" data-aos-delay="100">
                        <div class="card-body p-4 text-center">
                            <img src="https://ui-avatars.com/api/?name=<?= urlencode($kegiatan['pemateri']); ?>&background=random&size=128"
                                class="rounded-circle mb-3 shadow-sm" width="80" height="80" alt="Pemateri"
                                loading="lazy">
                            <h5 class="fw-bold mb-1">
                                <?= $kegiatan['pemateri']; ?>
                            </h5>
                            <p class="text-muted small mb-3">Pemateri / Penanggung Jawab</p>
                            <a href="#" class="btn btn-success rounded-pill px-4 w-100">Hubungi Panitia</a>
                        </div>
                    </div>

                    <!-- Other Activities -->
                    <?php if (!empty($terkait)): ?>
                        <div class="card border-0 shadow-sm rounded-4" data-aos="fade-left" data-aos-delay="200">
                            <div class="card-body p-4">
                                <h5 class="fw-bold mb-4">Kegiatan Lainnya</h5>
                                <div class="d-flex flex-column gap-3">
                                    <?php foreach ($terkait as $item):
                                        if ($item['slug'] == $kegiatan['slug'])
                                            continue; // Skip current
                                        ?>
                                        <a href="/kegiatan/<?= $item['slug']; ?>"
                                            class="d-flex align-items-center text-decoration-none group-hover-bg p-2 rounded-3 hover-bg-light">
                                            <img src="<?= $item['gambar']; ?>" class="rounded-3 object-fit-cover me-3"
                                                width="60" height="60" alt="<?= $item['judul']; ?>"
                                                onerror="this.src='<?= $item['fallback']; ?>'" loading="lazy">
                                            <div>
                                                <h6 class="fw-bold text-dark mb-1 small">
                                                    <?= $item['judul']; ?>
                                                </h6>
                                                <small class="text-muted"><i class="bi bi-calendar3 me-1"></i>
                                                    <?= $item['hari']; ?>
                                                </small>
                                            </div>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .backdrop-blur {
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
    }

    .blog-content p {
        line-height: 1.8;
        margin-bottom: 1.5rem;
        color: #4a5568;
    }

    .blog-content ul {
        margin-bottom: 1.5rem;
        padding-left: 1.5rem;
        color: #4a5568;
    }

    .blog-content li {
        margin-bottom: 0.5rem;
    }

    .hover-bg-light:hover {
        background-color: #f8f9fa;
    }
</style>

<?= $this->endSection(); ?>