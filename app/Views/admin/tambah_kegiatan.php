<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-transparent border-0 p-4 pb-0">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="fw-bold mb-1">Tambah Kegiatan Baru</h4>
                        <p class="text-muted small mb-0">Lengkapi formulir di bawah untuk menambahkan agenda kegiatan
                            masjid.</p>
                    </div>
                    <a href="/admin/kegiatan" class="btn btn-light rounded-pill px-4">
                        <i class="bi bi-arrow-left me-2"></i> Kembali
                    </a>
                </div>
            </div>
            <div class="card-body p-4">
                <form action="/admin/kegiatan/simpan" method="post" enctype="multipart/form-data">
                    <div class="row g-4">
                        <!-- Judul & Kategori -->
                        <div class="col-md-8">
                            <label class="form-label fw-bold">Judul Kegiatan</label>
                            <input type="text" class="form-control form-control-lg bg-light border-0"
                                placeholder="Contoh: Kajian Rutin Malam Jumat" required>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label fw-bold">Kategori</label>
                            <select class="form-select form-select-lg bg-light border-0">
                                <option value="kajian">Kajian</option>
                                <option value="remaja">Remaja</option>
                                <option value="pendidikan">Pendidikan</option>
                                <option value="sosial">Sosial</option>
                            </select>
                        </div>

                        <!-- Waktu & Lokasi -->
                        <div class="col-md-4">
                            <label class="form-label fw-bold">Hari / Tanggal</label>
                            <input type="text" class="form-control bg-light border-0"
                                placeholder="Contoh: Setiap Jumat / 20 Feb 2024">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label fw-bold">Waktu</label>
                            <input type="text" class="form-control bg-light border-0"
                                placeholder="Contoh: 18:30 WIB / Ba'da Maghrib">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label fw-bold">Lokasi</label>
                            <input type="text" class="form-control bg-light border-0"
                                placeholder="Contoh: Ruang Utama Masjid">
                        </div>

                        <!-- Pemateri -->
                        <div class="col-md-12">
                            <label class="form-label fw-bold">Pemateri / Narasumber</label>
                            <input type="text" class="form-control bg-light border-0"
                                placeholder="Nama Ustadz / Pembicara">
                        </div>

                        <!-- Deskripsi Singkat -->
                        <div class="col-md-12">
                            <label class="form-label fw-bold">Deskripsi Singkat</label>
                            <textarea class="form-control bg-light border-0" rows="2"
                                placeholder="Muncul di halaman daftar kegiatan..."></textarea>
                        </div>

                        <!-- Konten Lengkap -->
                        <div class="col-md-12">
                            <label class="form-label fw-bold">Konten Detail</label>
                            <textarea class="form-control bg-light border-0" rows="8"
                                placeholder="Tuliskan detail kegiatan di sini..."></textarea>
                        </div>

                        <!-- Upload Gambar -->
                        <div class="col-md-12">
                            <label class="form-label fw-bold">Poster / Gambar Kegiatan</label>
                            <div class="border-dashed-2 p-5 text-center rounded-4 bg-light position-relative">
                                <i class="bi bi-image text-muted display-4"></i>
                                <p class="mt-2 mb-0">Klik untuk unggah atau seret gambar ke sini</p>
                                <p class="small text-muted">Format: JPG, PNG, WEBP (Maks. 2MB)</p>
                                <input type="file" class="position-absolute top-0 start-0 w-100 h-100 opacity-0"
                                    style="cursor: pointer;">
                            </div>
                        </div>

                        <!-- Submit Buttons -->
                        <div class="col-12 mt-5">
                            <div class="d-flex gap-3">
                                <button type="submit" class="btn btn-success btn-lg rounded-pill px-5">Simpan
                                    Kegiatan</button>
                                <button type="reset" class="btn btn-light btn-lg rounded-pill px-5">Reset</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .border-dashed-2 {
        border: 2px dashed #dee2e6;
        transition: all 0.3s ease;
    }

    .border-dashed-2:hover {
        border-color: #198754;
        background-color: #f8f9fa !important;
    }

    .form-control:focus,
    .form-select:focus {
        background-color: #fff !important;
        border: 1px solid #198754 !important;
        box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.1) !important;
    }
</style>
<?= $this->endSection(); ?>