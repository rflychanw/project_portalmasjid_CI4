<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<div class="row g-4 mb-4">
    <div class="col-12">
        <div class="card border-0">
            <div class="card-header bg-transparent border-0 p-4 pb-0 d-flex justify-content-between align-items-center">
                <h5 class="fw-bold mb-0">Kelola Berita & Artikel</h5>
                <a href="/admin/berita/tambah" class="btn btn-success rounded-pill px-4">
                    <i class="bi bi-plus-lg me-2"></i> Buat Berita
                </a>
            </div>
            <div class="card-body p-4">
                <div class="table-responsive">
                    <table class="table table-hover align-middle custom-table">
                        <thead class="text-muted text-uppercase small ls-1">
                            <tr>
                                <th>Berita</th>
                                <th>Tanggal</th>
                                <th>Penulis</th>
                                <th>Status</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center gap-3">
                                        <img src="/asset/images/depan-masjid.webp" alt="" class="rounded"
                                            style="width: 60px; height: 40px; object-fit: cover;">
                                        <div>
                                            <div class="fw-bold">Persiapan Kegiatan Ramadhan 1445H</div>
                                            <div class="small text-muted text-truncate" style="max-width: 300px;">
                                                Menyambut bulan suci Ramadhan, Masjid Nurul Iman telah menyiapkan...
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>10 Mar 2024</td>
                                <td>Admin Masjid</td>
                                <td><span class="badge bg-success-subtle text-success border-0 px-3">Published</span>
                                </td>
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
                                        <img src="/asset/images/kasih-sayang.webp" alt="" class="rounded"
                                            style="width: 60px; height: 40px; object-fit: cover;">
                                        <div>
                                            <div class="fw-bold">Santunan Anak Yatim dan Dhuafa</div>
                                            <div class="small text-muted text-truncate" style="max-width: 300px;">
                                                Alhamdulillah, telah terlaksana kegiatan santunan bulanan...</div>
                                        </div>
                                    </div>
                                </td>
                                <td>25 Feb 2024</td>
                                <td>Panitia Sosial</td>
                                <td><span class="badge bg-success-subtle text-success border-0 px-3">Published</span>
                                </td>
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
                                        <img src="/asset/images/quran.webp" alt="" class="rounded"
                                            style="width: 60px; height: 40px; object-fit: cover;">
                                        <div>
                                            <div class="fw-bold">Pendaftaran Santri Baru TPA</div>
                                            <div class="small text-muted text-truncate" style="max-width: 300px;">Taman
                                                Pendidikan Al-Qur'an (TPA) Masjid Nurul Iman membuka...</div>
                                        </div>
                                    </div>
                                </td>
                                <td>20 Feb 2024</td>
                                <td>Kepala TPA</td>
                                <td><span class="badge bg-success-subtle text-success border-0 px-3">Published</span>
                                </td>
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
</style>
<?= $this->endSection(); ?>