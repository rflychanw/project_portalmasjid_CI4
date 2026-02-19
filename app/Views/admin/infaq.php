<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<div class="row g-4 mb-4">
    <div class="col-md-4">
        <div class="card stat-card border-0 bg-success text-white shadow-lg h-100">
            <h6 class="opacity-75 fw-normal">Total Saldo Infaq</h6>
            <h2 class="fw-bold mb-0">Rp 45,750,000</h2>
            <div class="mt-2 small">
                <i class="bi bi-wallet2"></i> Saldo Kas Masjid An Namiroh
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card stat-card border-0 h-100">
            <div class="stat-icon bg-success-subtle text-success">
                <i class="bi bi-arrow-down-left-circle-fill"></i>
            </div>
            <h6 class="text-muted fw-normal">Total Pemasukan (Februari)</h6>
            <h3 class="fw-bold mb-0 text-success">Rp 12,500,000</h3>
            <div class="mt-2 text-success small">
                <i class="bi bi-graph-up"></i> Meningkat 15% dari Januari
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card stat-card border-0 h-100">
            <div class="stat-icon bg-danger-subtle text-danger">
                <i class="bi bi-arrow-up-right-circle-fill"></i>
            </div>
            <h6 class="text-muted fw-normal">Total Pengeluaran (Februari)</h6>
            <h3 class="fw-bold mb-0 text-danger">Rp 4,200,000</h3>
            <div class="mt-2 text-danger small">
                <i class="bi bi-graph-down"></i> Stabil untuk bulan ini
            </div>
        </div>
    </div>
</div>

<div class="row g-4 mb-4">
    <div class="col-12">
        <div class="card border-0">
            <div class="card-header bg-transparent border-0 p-4 pb-0">
                <h5 class="fw-bold mb-0">Tren Infaq Mingguan (Bulan Ini)</h5>
            </div>
            <div class="card-body p-4">
                <canvas id="weeklyInfaqChart" style="max-height: 250px;"></canvas>
            </div>
        </div>
    </div>
</div>

<div class="row g-4">
    <div class="col-12">
        <div class="card border-0">
            <div class="card-header bg-transparent border-0 p-4 pb-0 d-flex justify-content-between align-items-center">
                <h5 class="fw-bold mb-0">Riwayat Transaksi Infaq</h5>
                <div class="d-flex gap-2">
                    <button class="btn btn-success rounded-pill px-4" data-bs-toggle="modal"
                        data-bs-target="#modalTambahInfaq">
                        <i class="bi bi-plus-lg me-2"></i> Tambah Transaksi
                    </button>
                    <button class="btn btn-outline-secondary rounded-pill">
                        <i class="bi bi-download me-2"></i> Ekspor PDF
                    </button>
                </div>
            </div>
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table table-hover align-middle custom-table">
                        <thead class="text-muted text-uppercase small ls-1">
                            <tr>
                                <th>Tanggal</th>
                                <th>Keterangan</th>
                                <th>Kategori</th>
                                <th class="text-end">Jumlah</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Contoh Infaq Masuk -->
                            <tr>
                                <td>15 Feb 2024</td>
                                <td>
                                    <div class="fw-bold">Infaq Jumat Berkah</div>
                                    <div class="small text-muted">Hamba Allah</div>
                                </td>
                                <td><span class="badge bg-success-subtle text-success border-0 px-3">Masuk</span></td>
                                <td class="text-end fw-bold text-success">+ Rp 2,500,000</td>
                                <td class="text-center">
                                    <button class="btn btn-light btn-sm rounded-circle shadow-sm"><i
                                            class="bi bi-pencil"></i></button>
                                    <button class="btn btn-light btn-sm rounded-circle shadow-sm text-danger"><i
                                            class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            <!-- Contoh Infaq Keluar -->
                            <tr>
                                <td>12 Feb 2024</td>
                                <td>
                                    <div class="fw-bold">Perbaikan Keran Wudhu</div>
                                    <div class="small text-muted">Pembiayaan Bangunan</div>
                                </td>
                                <td><span class="badge bg-danger-subtle text-danger border-0 px-3">Keluar</span></td>
                                <td class="text-end fw-bold text-danger">- Rp 450,000</td>
                                <td class="text-center">
                                    <button class="btn btn-light btn-sm rounded-circle shadow-sm"><i
                                            class="bi bi-pencil"></i></button>
                                    <button class="btn btn-light btn-sm rounded-circle shadow-sm text-danger"><i
                                            class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>10 Feb 2024</td>
                                <td>
                                    <div class="fw-bold">Bayar Listrik Masjid</div>
                                    <div class="small text-muted">Operasional</div>
                                </td>
                                <td><span class="badge bg-danger-subtle text-danger border-0 px-3">Keluar</span></td>
                                <td class="text-end fw-bold text-danger">- Rp 1,200,000</td>
                                <td class="text-center">
                                    <button class="btn btn-light btn-sm rounded-circle shadow-sm"><i
                                            class="bi bi-pencil"></i></button>
                                    <button class="btn btn-light btn-sm rounded-circle shadow-sm text-danger"><i
                                            class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>08 Feb 2024</td>
                                <td>
                                    <div class="fw-bold">Infaq Kotak Amal Utama</div>
                                    <div class="small text-muted">Jamaah</div>
                                </td>
                                <td><span class="badge bg-success-subtle text-success border-0 px-3">Masuk</span></td>
                                <td class="text-end fw-bold text-success">+ Rp 5,700,000</td>
                                <td class="text-center">
                                    <button class="btn btn-light btn-sm rounded-circle shadow-sm"><i
                                            class="bi bi-pencil"></i></button>
                                    <button class="btn btn-light btn-sm rounded-circle shadow-sm text-danger"><i
                                            class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .ls-1 {
        letter-spacing: 0.05em;
    }

    .custom-table thead th {
        padding: 1.5rem 1rem;
        border-bottom: 2px solid #f8f9fa;
    }

    .custom-table tbody td {
        padding: 1.2rem 1rem;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const ctx = document.getElementById('weeklyInfaqChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?= json_encode($chart_data['labels']) ?>,
                datasets: [{
                    label: 'Pemasukan',
                    data: <?= json_encode($chart_data['masuk']) ?>,
                    backgroundColor: '#198754',
                    borderRadius: 8,
                    barThickness: 20
                }, {
                    label: 'Pengeluaran',
                    data: <?= json_encode($chart_data['keluar']) ?>,
                    backgroundColor: '#dc3545',
                    borderRadius: 8,
                    barThickness: 20
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
                            font: { family: "'Plus Jakarta Sans', sans-serif", size: 12 }
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
                            label: function (context) {
                                let label = context.dataset.label || '';
                                if (context.parsed.y !== null) {
                                    label += ': ' + new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', maximumFractionDigits: 0 }).format(context.parsed.y);
                                }
                                return label;
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: { drawBorder: false, color: 'rgba(0, 0, 0, 0.03)' },
                        ticks: {
                            callback: function (value) { return 'Rp ' + (value / 1000000) + 'jt'; },
                            font: { size: 11 }
                        }
                    },
                    x: {
                        grid: { display: false },
                        ticks: { font: { size: 11 } }
                    }
                }
            }
        });
    });
</script>

<?= $this->endSection(); ?>