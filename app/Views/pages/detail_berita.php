<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Hero / Header Section -->
<section class="d-flex align-items-center justify-content-center text-white text-center position-relative"
    style="height: 40vh; background: linear-gradient(rgba(15, 81, 50, 0.9), rgba(15, 81, 50, 0.8)), url('<?= $berita['img']; ?>') center/cover no-repeat;">
    <div class="container position-relative" style="z-index: 2;" data-aos="fade-down">
        <h1 class="display-4 fw-bold mb-3">
            <?= $berita['judul']; ?>
        </h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mt-4">
                <li class="breadcrumb-item"><a href="/" class="text-white text-decoration-none">Beranda</a></li>
                <li class="breadcrumb-item"><a href="/berita" class="text-white text-decoration-none">Berita</a></li>
                <li class="breadcrumb-item active text-white-50" aria-current="page">
                    <?= $berita['judul']; ?>
                </li>
            </ol>
        </nav>
    </div>
</section>

<!-- Main Article Content -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- Meta Data -->
                <div class="d-flex justify-content-between align-items-center mb-4 text-muted border-bottom pb-3">
                    <div>
                        <i class="bi bi-calendar3 me-2 text-success"></i>
                        <?= $berita['tanggal']; ?>
                        <span class="mx-2">|</span>
                        <i class="bi bi-person me-2 text-success"></i>
                        <?= $berita['penulis']; ?>
                    </div>
                    <div>
                        <span class="badge bg-success rounded-pill px-3 py-2">Berita Terbaru</span>
                    </div>
                </div>

                <!-- Featured Image -->
                <div class="mb-5 overflow-hidden rounded-4 shadow-sm" data-aos="fade-up">
                    <img src="<?= $berita['img']; ?>" class="img-fluid w-100 object-fit-cover"
                        alt="<?= $berita['judul']; ?>" style="max-height: 500px;">
                </div>

                <!-- Content -->
                <article class="blog-content fs-5 lh-lg text-dark mb-5" data-aos="fade-up" data-aos-delay="100">
                    <?= $berita['konten']; ?>
                </article>

                <!-- Share -->
                <div class="d-flex align-items-center justify-content-between bg-light p-4 rounded-4 mb-5">
                    <h6 class="mb-0 fw-bold text-success">Bagikan Artikel Ini:</h6>
                    <div class="d-flex gap-2">
                        <button class="btn btn-outline-success rounded-circle shadow-sm"
                            onclick="window.open('https://api.whatsapp.com/send?text=<?= urlencode(base_url('berita/' . $berita['slug'])); ?>', '_blank')"><i
                                class="bi bi-whatsapp"></i></button>
                        <button class="btn btn-outline-primary rounded-circle shadow-sm"><i
                                class="bi bi-facebook"></i></button>
                        <button class="btn btn-outline-info rounded-circle shadow-sm"><i
                                class="bi bi-twitter"></i></button>
                        <button class="btn btn-outline-secondary rounded-circle shadow-sm"
                            onclick="navigator.clipboard.writeText(window.location.href); alert('Link disalin!');"><i
                                class="bi bi-link-45deg"></i></button>
                    </div>
                </div>

                <!-- Navigation -->
                <div class="d-flex justify-content-between mb-5">
                    <a href="/berita" class="btn btn-outline-secondary rounded-pill px-4"><i
                            class="bi bi-arrow-left me-2"></i> Kembali ke Berita</a>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- Related News Section -->
<section class="py-5 bg-light border-top">
    <div class="container">
        <h3 class="fw-bold mb-4 text-success border-start border-5 border-success ps-3">Berita Lainnya</h3>
        <div class="row g-4">
            <?php foreach ($terkait as $item):
                if ($item['slug'] == $berita['slug'])
                    continue; // Skip current
                ?>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden hover-card">
                        <div class="row g-0 h-100">
                            <div class="col-4">
                                <img src="<?= $item['img']; ?>" class="img-fluid rounded-start h-100 object-fit-cover"
                                    alt="...">
                            </div>
                            <div class="col-8">
                                <div class="card-body py-2 pe-2 ps-3 d-flex flex-column h-100 justify-content-center">
                                    <small class="text-muted mb-1" style="font-size: 0.75rem;"><i
                                            class="bi bi-calendar3 me-1"></i>
                                        <?= $item['tanggal']; ?>
                                    </small>
                                    <h6 class="card-title fw-bold mb-0 text-truncate-2" style="font-size: 0.95rem;">
                                        <a href="/berita/<?= $item['slug']; ?>"
                                            class="text-dark text-decoration-none stretched-link">
                                            <?= $item['judul']; ?>
                                        </a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>