<?= $this->extend('layout/admin_template'); ?>

<?= $this->section('content'); ?>
<div class="row justify-content-center">
    <div class="col-lg-10">
        <div class="card border-0 shadow-sm">
            <div class="card-header bg-transparent border-0 p-4 pb-0">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h4 class="fw-bold mb-1">Buat Berita Baru</h4>
                        <p class="text-muted small mb-0">Publikasikan artikel, berita, atau pengumuman terbaru masjid.
                        </p>
                    </div>
                    <a href="/admin/berita" class="btn btn-light rounded-pill px-4">
                        <i class="bi bi-arrow-left me-2"></i> Kembali
                    </a>
                </div>
            </div>
            <div class="card-body p-4">
                <form action="/admin/berita/simpan" method="post" enctype="multipart/form-data">
                    <div class="row g-4">
                        <!-- Judul Berita -->
                        <div class="col-md-12">
                            <label class="form-label fw-bold">Judul Berita</label>
                            <input type="text" class="form-control form-control-lg bg-light border-0"
                                placeholder="Masukkan judul berita yang menarik" required>
                        </div>

                        <!-- Penulis & Status -->
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Penulis</label>
                            <input type="text" class="form-control bg-light border-0" value="Admin Masjid" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-bold">Status Publikasi</label>
                            <select class="form-select bg-light border-0">
                                <option value="published">Langsung Terbitkan</option>
                                <option value="draft">Simpan Sebagai Draft</option>
                            </select>
                        </div>

                        <!-- Ringkasan (Excerpt) -->
                        <div class="col-md-12">
                            <label class="form-label fw-bold">Ringkasan Berita</label>
                            <textarea class="form-control bg-light border-0" rows="3"
                                placeholder="Tuliskan ringkasan singkat artikel ini..."></textarea>
                            <div class="form-text mt-2 small">Ringkasan ini akan muncul di kartu berita pada halaman
                                depan.</div>
                        </div>

                        <!-- Konten Utama -->
                        <div class="col-md-12">
                            <label class="form-label fw-bold">Isi Berita Lengkap</label>
                            <div class="alert alert-info small d-flex align-items-center mb-3">
                                <i class="bi bi-info-circle-fill me-2 fs-5"></i>
                                Anda dapat menulis konten berita secara lengkap di sini. Gunakan paragraf yang jelas.
                            </div>
                            <textarea class="form-control bg-light border-0" rows="15"
                                placeholder="Tuliskan isi berita selengkap mungkin di sini..."></textarea>
                        </div>

                        <!-- Gambar Utama -->
                        <div class="col-md-12">
                            <label class="form-label fw-bold">Gambar Utama (Thumbnail)</label>
                            <div class="border-dashed-2 p-5 text-center rounded-4 bg-light position-relative">
                                <i class="bi bi-cloud-arrow-up text-muted display-4"></i>
                                <p class="mt-2 mb-0">Klik untuk unggah cover berita</p>
                                <p class="small text-muted">Format: JPG, PNG, WEBP (Maks. 2MB)</p>
                                <input type="file" class="position-absolute top-0 start-0 w-100 h-100 opacity-0"
                                    style="cursor: pointer;">
                            </div>
                        </div>

                        <!-- Tombol Aksi -->
                        <div class="col-12 mt-5">
                            <div class="d-flex gap-3">
                                <button type="submit" class="btn btn-success btn-lg rounded-pill px-5">Publish
                                    Berita</button>
                                <button type="reset" class="btn btn-light btn-lg rounded-pill px-5">Batalkan</button>
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