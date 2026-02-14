<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?php
function renderCard($item)
{
    $badgeTextClass = $item['badge_color'] == 'warning' || $item['badge_color'] == 'info' ? 'text-dark' : 'text-white';
    $borderClass = "border-" . $item['badge_color'];

    return '
    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="' . $item['delay'] . '">
        <div class="card h-100 border-0 shadow-sm event-card rounded-4 overflow-hidden hover-card">
            <div class="position-relative">
                <img src="' . $item['gambar'] . '" class="card-img-top object-fit-cover"
                    alt="' . $item['judul'] . '"
                    onerror="this.src=\'' . $item['fallback'] . '\'"
                    style="height: 250px;">
                <span class="position-absolute top-0 end-0 m-3 badge bg-' . $item['badge_color'] . ' ' . $badgeTextClass . ' fs-6 shadow-sm">
                    <i class="bi ' . $item['badge_icon'] . ' me-1"></i> ' . $item['badge'] . '
                </span>
            </div>
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-3 text-muted">
                    <small><i class="bi bi-calendar3 me-1 text-' . $item['badge_color'] . '"></i> ' . $item['hari'] . '</small>
                    <small><i class="bi bi-clock me-1 text-' . $item['badge_color'] . '"></i> ' . $item['jam'] . '</small>
                </div>
                <h4 class="card-title fw-bold mb-2"><a href="/kegiatan/' . $item['slug'] . '" class="text-dark text-decoration-none stretched-link">' . $item['judul'] . '</a></h4>
                <p class="card-text text-muted mb-4 small">' . $item['deskripsi'] . '</p>
                <div class="d-flex align-items-center mt-auto border-top pt-3">
                     <img src="https://ui-avatars.com/api/?name=' . urlencode($item['pemateri']) . '&background=random" class="rounded-circle me-3" width="40" height="40" alt="Avatar">
                    <div>
                        <h6 class="fw-bold mb-0 small">' . $item['pemateri'] . '</h6>
                        <small class="text-muted">' . $item['lokasi'] . '</small>
                    </div>
                </div>
            </div>
        </div>
    </div>';
}
?>

<!-- Hero Section -->
<section class="d-flex align-items-center justify-content-center text-white text-center position-relative"
    style="height: 60vh; background: linear-gradient(rgba(19, 20, 20, 0.85), rgba(15, 81, 50, 0.7)), url('/asset/images/quran.jpg') center/cover no-repeat;">
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

        <!-- Filter using Bootstrap Nav Pills (Act as Buttons) -->
        <div class="d-flex justify-content-center mb-5 data-aos=fade-up">
            <ul class="nav nav-pills gap-3 overflow-auto pb-2" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active shadow-sm" id="pills-all-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-all" type="button" role="tab" aria-selected="true">Semua</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link shadow-sm border" id="pills-kajian-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-kajian" type="button" role="tab" aria-selected="false">Kajian
                        Rutin</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link shadow-sm border" id="pills-sosial-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-sosial" type="button" role="tab" aria-selected="false">Sosial</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link shadow-sm border" id="pills-pendidikan-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-pendidikan" type="button" role="tab"
                        aria-selected="false">Pendidikan</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link shadow-sm border" id="pills-remaja-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-remaja" type="button" role="tab" aria-selected="false">Remaja</button>
                </li>
            </ul>
        </div>

        <!-- Content Tabs -->
        <div class="tab-content" id="pills-tabContent">

            <!-- All -->
            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" tabindex="0">
                <div class="row g-4 justify-content-center">
                    <?php foreach ($kegiatan as $item): ?>
                        <?= renderCard($item); ?>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Kajian -->
            <div class="tab-pane fade" id="pills-kajian" role="tabpanel" tabindex="0">
                <div class="row g-4 justify-content-center">
                    <?php foreach ($kegiatan as $item):
                        if ($item['kategori'] == 'kajian'): ?>
                            <?= renderCard($item); ?>
                        <?php endif; endforeach; ?>
                </div>
            </div>

            <!-- Sosial -->
            <div class="tab-pane fade" id="pills-sosial" role="tabpanel" tabindex="0">
                <div class="row g-4 justify-content-center">
                    <?php foreach ($kegiatan as $item):
                        if ($item['kategori'] == 'sosial'): ?>
                            <?= renderCard($item); ?>
                        <?php endif; endforeach; ?>
                </div>
            </div>

            <!-- Pendidikan -->
            <div class="tab-pane fade" id="pills-pendidikan" role="tabpanel" tabindex="0">
                <div class="row g-4 justify-content-center">
                    <?php foreach ($kegiatan as $item):
                        if ($item['kategori'] == 'pendidikan'): ?>
                            <?= renderCard($item); ?>
                        <?php endif; endforeach; ?>
                </div>
            </div>

            <!-- Remaja -->
            <div class="tab-pane fade" id="pills-remaja" role="tabpanel" tabindex="0">
                <div class="row g-4 justify-content-center">
                    <?php foreach ($kegiatan as $item):
                        if ($item['kategori'] == 'remaja'): ?>
                            <?= renderCard($item); ?>
                        <?php endif; endforeach; ?>
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

<style>
    /* Custom Style for Filter Pills to Match Previous Design */
    .nav-pills .nav-link {
        background-color: #fff;
        color: #000;
        border: 1px solid #dee2e6;
        /* Bootstrap border color */
        border-radius: 50rem;
        /* pill */
        padding-left: 1.5rem;
        padding-right: 1.5rem;
        font-weight: 500;
        transition: all 0.3s ease;
    }



    .nav-pills .nav-link:hover {
        background-color: #f8f9fa;
    }

    /* Remove yellow underline from global .nav-link style */
    .nav-pills .nav-link::after {
        display: none !important;
    }


    .nav-pills .nav-link.active {
        background-color: #198754 !important;
        /* success color */
        color: #fff !important;
        border-color: #198754 !important;
        font-weight: 700;
    }
</style>

<?= $this->endSection(); ?>