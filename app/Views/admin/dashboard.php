<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<div class="row g-4 mb-4">
    <!-- Stat Cards -->
    <div class="col-md-4 col-lg-2">
        <div class="card stat-card border-0 bg-success text-white shadow-lg h-100">
            <h6 class="opacity-75 fw-normal">Total Saldo</h6>
            <h3 class="fw-bold mb-0">Rp <?= number_format($stats['saldo'], 0, ',', '.'); ?></h3>
            <div class="mt-2 small">
                <i class="bi bi-wallet2"></i> Saldo Kas
            </div>
        </div>
    </div>
    <div class="col-md-4 col-lg-2">
        <div class="card stat-card border-0 h-100">
            <div class="stat-icon bg-primary-subtle text-primary">
                <i class="bi bi-newspaper"></i>
            </div>
            <h6 class="text-muted fw-normal">Berita</h6>
            <h3 class="fw-bold mb-0"><?= number_format($stats['total_berita'], 0, ',', '.'); ?></h3>
        </div>
    </div>
    <div class="col-md-4 col-lg-2">
        <div class="card stat-card border-0 h-100">
            <div class="stat-icon bg-success-subtle text-success">
                <i class="bi bi-calendar-event"></i>
            </div>
            <h6 class="text-muted fw-normal">Kegiatan</h6>
            <h3 class="fw-bold mb-0"><?= number_format($stats['total_kegiatan'], 0, ',', '.'); ?></h3>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card stat-card border-0 h-100">
            <div class="stat-icon bg-success-subtle text-success">
                <i class="bi bi-arrow-down-left-circle"></i>
            </div>
            <h6 class="text-muted fw-normal">Infaq Masuk (Bulan Ini)</h6>
            <h3 class="fw-bold mb-0 text-success">Rp <?= number_format($stats['infaq_masuk'], 0, ',', '.'); ?></h3>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card stat-card border-0 h-100">
            <div class="stat-icon bg-danger-subtle text-danger">
                <i class="bi bi-arrow-up-right-circle"></i>
            </div>
            <h6 class="text-muted fw-normal">Infaq Keluar (Bulan Ini)</h6>
            <h3 class="fw-bold mb-0 text-danger">Rp <?= number_format($stats['infaq_keluar'], 0, ',', '.'); ?></h3>
        </div>
    </div>
</div>

<div class="row g-4 mb-4">
    <!-- Infaq Chart -->
    <div class="col-lg-12">
        <div class="card border-0">
            <div class="card-header bg-transparent border-0 p-4 pb-0">
                <h5 class="fw-bold mb-0">Statistik Infaq (6 Bulan Terakhir)</h5>
            </div>
            <div class="card-body p-4">
                <canvas id="infaqChart" style="max-height: 350px;"></canvas>
            </div>
        </div>
    </div>
</div>

<div class="row g-4">
    <!-- Recent Activities -->
    <div class="col-lg-8">
        <div class="card border-0 h-100">
            <div class="card-header bg-transparent border-0 p-4 pb-0 d-flex justify-content-between align-items-center">
                <h5 class="fw-bold mb-0">Kegiatan Mendatang</h5>
                <a href="/admin/kegiatan" class="btn btn-sm btn-outline-success rounded-pill">Lihat Semua</a>
            </div>
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table table-hover align-middle custom-table">
                        <thead class="text-muted">
                            <tr>
                                <th>Nama Kegiatan</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($kegiatan_mendatang as $kegiatan): ?>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="bg-<?= $kegiatan['color'] ?>-subtle p-2 rounded">
                                                <i class="bi <?= $kegiatan['icon'] ?> text-<?= $kegiatan['color'] ?>"></i>
                                            </div>
                                            <div>
                                                <div class="fw-bold"><?= $kegiatan['judul'] ?></div>
                                                <div class="small text-muted"><?= $kegiatan['sub'] ?></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><?= $kegiatan['tanggal'] ?></td>
                                    <td><span
                                            class="badge bg-<?= $kegiatan['color'] ?>-subtle text-<?= $kegiatan['color'] ?> border-0 px-3"><?= $kegiatan['status'] ?></span>
                                    </td>
                                    <td>
                                        <button class="btn btn-light btn-sm rounded-circle"><i
                                                class="bi bi-pencil"></i></button>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Links / Info -->
    <div class="col-lg-4">
        <div class="card border-0 mb-4 bg-success text-white shadow-lg overflow-hidden position-relative"
            style="min-height: 200px;">
            <div class="card-body p-4 position-relative" style="z-index: 2;">
                <h5 class="fw-bold">Waktu Sholat</h5>
                <p class="opacity-75">Update jadwal sholat hari ini</p>
                <div class="display-4 fw-bold mb-3">15:42</div>
                <div class="badge bg-white text-success px-3 py-2 rounded-pill fw-bold">Ashar - Sedang Berlangsung</div>
            </div>
            <i class="bi bi-moon-stars position-absolute bottom-0 end-0 opacity-10"
                style="font-size: 150px; margin-bottom: -40px; margin-right: -20px;"></i>
        </div>

        <div class="card border-0">
            <div class="card-header bg-transparent border-0 p-4 pb-0">
                <h5 class="fw-bold mb-0">Pintasan Cepat</h5>
            </div>
            <div class="card-body p-4">
                <div class="d-grid gap-2">
                    <a href="/admin/berita/tambah"
                        class="btn btn-light text-start p-3 border-0 rounded-4 transition-all">
                        <i class="bi bi-patch-plus-fill text-success me-2"></i> Buat Berita Baru
                    </a>
                    <a href="/admin/kegiatan/tambah"
                        class="btn btn-light text-start p-3 border-0 rounded-4 transition-all">
                        <i class="bi bi-calendar-plus-fill text-primary me-2"></i> Tambah Kegiatan
                    </a>
                    <a href="/admin/pengaturan" class="btn btn-light text-start p-3 border-0 rounded-4 transition-all">
                        <i class="bi bi-gear-fill text-secondary me-2"></i> Pengaturan Website
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .custom-table thead th {
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.75rem;
        letter-spacing: 0.05em;
        padding: 1.5rem 1rem;
    }

    .custom-table tbody td {
        padding: 1.2rem 1rem;
    }

    .transition-all {
        transition: all 0.2s ease;
    }

    .transition-all:hover {
        background-color: #f1f5f9 !important;
        transform: translateX(5px);
    }

    .bg-primary-subtle {
        background-color: rgba(13, 110, 253, 0.1) !important;
    }

    .bg-success-subtle {
        background-color: rgba(25, 135, 84, 0.1) !important;
    }

    .bg-warning-subtle {
        background-color: rgba(255, 193, 7, 0.1) !important;
    }

    .bg-info-subtle {
        background-color: rgba(13, 202, 240, 0.1) !important;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const ctx = document.getElementById('infaqChart').getContext('2d');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: <?= json_encode($chart_data['labels']) ?>,
                datasets: [{
                    label: 'Infaq Masuk',
                    data: <?= json_encode($chart_data['masuk']) ?>,
                    borderColor: '#198754',
                    backgroundColor: 'rgba(25, 135, 84, 0.1)',
                    fill: true,
                    tension: 0.4,
                    borderWidth: 3,
                    pointRadius: 4,
                    pointBackgroundColor: '#198754'
                }, {
                    label: 'Infaq Keluar',
                    data: <?= json_encode($chart_data['keluar']) ?>,
                    borderColor: '#dc3545',
                    backgroundColor: 'rgba(220, 53, 69, 0.05)',
                    fill: true,
                    tension: 0.4,
                    borderWidth: 2,
                    borderDash: [5, 5],
                    pointRadius: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                            usePointStyle: true,
                            padding: 20,
                            font: {
                                family: "'Plus Jakarta Sans', sans-serif",
                                size: 12
                            }
                        }
                    },
                    tooltip: {
                        mode: 'index',
                        intersect: false,
                        padding: 12,
                        backgroundColor: 'rgba(255, 255, 255, 0.9)',
                        titleColor: '#334155',
                        bodyColor: '#334155',
                        borderColor: '#e2e8f0',
                        borderWidth: 1,
                        callbacks: {
                            label: function(context) {
                                let label = context.dataset.label || '';
                                if (label) {
                                    label += ': ';
                                }
                                if (context.parsed.y !== null) {
                                    label += new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', maximumFractionDigits: 0 }).format(context.parsed.y);
                                }
                                return label;
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            drawBorder: false,
                            color: 'rgba(0, 0, 0, 0.03)'
                        },
                        ticks: {
                            callback: function(value) {
                                return 'Rp ' + (value / 1000000) + 'jt';
                            },
                            font: {
                                size: 11
                            }
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        },
                        ticks: {
                            font: {
                                size: 11
                            }
                        }
                    }
                }
            }
        });
    });
</script>

<?= $this->endSection(); ?>