<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<div class="row g-4 mb-4">
    <div class="col-xl-4 col-md-6">
        <div class="card stat-card border-0 bg-success text-white shadow-lg h-100 overflow-hidden position-relative">
            <div class="card-body p-4 position-relative" style="z-index: 2;">
                <h6 class="opacity-75 fw-normal mb-2">Total Saldo Infaq</h6>
                <h2 class="fw-bold mb-3">Rp 45.750.000</h2>
                <div class="d-flex align-items-center small opacity-75">
                    <i class="bi bi-wallet2 me-2"></i>
                    <span>Saldo Kas Masjid An Namiroh</span>
                </div>
            </div>
            <i class="bi bi-cash-stack position-absolute bottom-0 end-0 opacity-10 m-n3" style="font-size: 100px;"></i>
        </div>
    </div>
    <div class="col-xl-4 col-md-6">
        <div class="card stat-card border-0 h-100 shadow-sm">
            <div class="card-body p-4">
                <div class="stat-icon bg-success-subtle text-success mb-3">
                    <i class="bi bi-arrow-down-left-circle-fill"></i>
                </div>
                <h6 class="text-muted fw-normal mb-1">Total Pemasukan (Februari)</h6>
                <h3 class="fw-bold mb-2 text-success">Rp 12.500.000</h3>
                <div class="small text-success d-flex align-items-center">
                    <i class="bi bi-graph-up me-1"></i>
                    <span>Meningkat 15% dari Januari</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-12">
        <div class="card stat-card border-0 h-100 shadow-sm">
            <div class="card-body p-4">
                <div class="stat-icon bg-danger-subtle text-danger mb-3">
                    <i class="bi bi-arrow-up-right-circle-fill"></i>
                </div>
                <h6 class="text-muted fw-normal mb-1">Total Pengeluaran (Februari)</h6>
                <h3 class="fw-bold mb-2 text-danger">Rp 4.200.000</h3>
                <div class="small text-danger d-flex align-items-center">
                    <i class="bi bi-graph-down me-1"></i>
                    <span>Stabil untuk bulan ini</span>
                </div>
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

    .stat-card {
        border-radius: 20px !important;
        overflow: hidden;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .stat-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08) !important;
    }

    .bg-success-subtle {
        background-color: rgba(25, 135, 84, 0.08) !important;
    }

    .bg-danger-subtle {
        background-color: rgba(220, 53, 69, 0.08) !important;
    }
</style>

<script>
<!-- Modal Tambah Infaq -->
<div class="modal fade" id="modalTambahInfaq" tabindex="-1" aria-labelledby="modalTambahInfaqLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-4">
            <div class="modal-header border-0 p-4">
                <h5 class="modal-title fw-bold" id="modalTambahInfaqLabel">Tambah Transaksi Infaq</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/admin/infaq/simpan" method="POST" id="formInfaq">
                <div class="modal-body p-4 pt-0">
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control rounded-3 border-light bg-light" required
                            value="<?= date('Y-m-d') ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Jenis Transaksi</label>
                        <div class="d-flex gap-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis" id="jenisMasuk" value="masuk"
                                    checked>
                                <label class="form-check-label" for="jenisMasuk">Pemasukan</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="jenis" id="jenisKeluar"
                                    value="keluar">
                                <label class="form-check-label" for="jenisKeluar">Pengeluaran</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Kategori / Sumber</label>
                        <select name="kategori" class="form-select rounded-3 border-light bg-light" required>
                            <option value="Jumat Berkah">Infaq Jumat Berkah</option>
                            <option value="Kotak Amal">Kotak Amal Utama</option>
                            <option value="Operasional">Biaya Operasional</option>
                            <option value="Pembangunan">Pembiayaan Bangunan</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Keterangan</label>
                        <textarea name="keterangan" class="form-control rounded-3 border-light bg-light" rows="3"
                            placeholder="Contoh: Hamba Allah, Bayar Listrik, dll" required></textarea>
                    </div>
                    <div class="mb-0">
                        <label class="form-label fw-semibold">Jumlah (Rp)</label>
                        <div class="input-group">
                            <span class="input-group-text border-0 bg-light rounded-start-3">Rp</span>
                            <input type="number" name="jumlah" class="form-control rounded-end-3 border-light bg-light"
                                placeholder="0" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 p-4 pt-0">
                    <button type="button" class="btn btn-light rounded-pill px-4" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success rounded-pill px-4 shadow-sm">Simpan Transaksi</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--SweetAlert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
        <?php if (session()->getFlashdata('success')): ?>
            Swal.fire({
                icon: 'success',
            title: 'Berhasil!',
            text: '<?= session()->getFlashdata('success') ?>',
            timer: 3000,
            showConfirmButton: false,
            border: 'none',
            borderRadius: '15px'
            });
        <?php endif; ?>

        document.addEventListener('DOMContentLoaded', function () {
        // ... previous chart logic ...
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
        font: {family: "'Plus Jakarta Sans', sans-serif", size: 12 }
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
        grid: {drawBorder: false, color: 'rgba(0, 0, 0, 0.03)' },
        ticks: {
            callback: function (value) { return 'Rp ' + (value / 1000000) + 'jt'; },
        font: {size: 11 }
                        }
                    },
        x: {
            grid: {display: false },
        ticks: {font: {size: 11 } }
                    }
                }
            }
        });
    });
</script>

<?= $this->endSection(); ?>