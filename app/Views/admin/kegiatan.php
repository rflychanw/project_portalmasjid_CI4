<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<div class="row g-4 mb-4">
    <div class="col-12">
        <div class="card border-0">
            <div class="card-header bg-transparent border-0 p-4 pb-0 d-flex justify-content-between align-items-center">
                <h5 class="fw-bold mb-0">Kelola Kegiatan Masjid</h5>
                <a href="/admin/kegiatan/tambah" class="btn btn-success rounded-pill px-4">
                    <i class="bi bi-plus-lg me-2"></i> Tambah Kegiatan
                </a>
            </div>
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table table-hover align-middle custom-table">
                        <thead class="text-muted text-uppercase small ls-1">
                            <tr>
                                <th>Kegiatan</th>
                                <th>Waktu & Lokasi</th>
                                <th>Pemateri</th>
                                <th>Status</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="bg-success-subtle p-2 rounded">
                                            <i class="bi bi-book text-success"></i>
                                        </div>
                                        <div>
                                            <div class="fw-bold">Tafsir Al-Qur'an Juz Amma</div>
                                            <div class="small text-muted">Kajian Rutin</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="small fw-bold">Ahad, Ba'da Subuh</div>
                                    <div class="small text-muted">Masjid Utama</div>
                                </td>
                                <td>Ust. Abdul Hamid</td>
                                <td><span class="badge bg-success-subtle text-success border-0 px-3">Aktif</span></td>
                                <td class="text-center">
                                    <button class="btn btn-light btn-sm rounded-circle shadow-sm"><i
                                            class="bi bi-pencil"></i></button>
                                    <button class="btn btn-light btn-sm rounded-circle shadow-sm text-danger"><i
                                            class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="bg-warning-subtle p-2 rounded">
                                            <i class="bi bi-people text-warning"></i>
                                        </div>
                                        <div>
                                            <div class="fw-bold">Olahraga Sunnah Memanah</div>
                                            <div class="small text-muted">Remaja Masjid</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="small fw-bold">Sabtu, 08:00 WIB</div>
                                    <div class="small text-muted">Halaman Belakang</div>
                                </td>
                                <td>Coach Rahmat</td>
                                <td><span class="badge bg-success-subtle text-success border-0 px-3">Aktif</span></td>
                                <td class="text-center">
                                    <button class="btn btn-light btn-sm rounded-circle shadow-sm"><i
                                            class="bi bi-pencil"></i></button>
                                    <button class="btn btn-light btn-sm rounded-circle shadow-sm text-danger"><i
                                            class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="bg-info-subtle p-2 rounded">
                                            <i class="bi bi-mortarboard text-info"></i>
                                        </div>
                                        <div>
                                            <div class="fw-bold">Belajar Membaca Al-Qur'an</div>
                                            <div class="small text-muted">Pendidikan TPA</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="small fw-bold">Senin-Kamis, 16:00 WIB</div>
                                    <div class="small text-muted">Kelas TPA</div>
                                </td>
                                <td>Ustjh. Fatimah</td>
                                <td><span class="badge bg-success-subtle text-success border-0 px-3">Aktif</span></td>
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
<?= $this->endSection(); ?>