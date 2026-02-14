<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Hero Section -->
<section class="d-flex align-items-center justify-content-center text-white text-center position-relative"
    style="height: 50vh; min-height: 400px; background: linear-gradient(rgba(15, 81, 50, 0.9), rgba(15, 81, 50, 0.7)), url('/asset/images/sholat-jamaah.jpg') center/cover no-repeat;">
    <div class="position-absolute top-0 start-0 w-100 h-100"
        style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 30px 30px; opacity: 0.08;">
    </div>
    <div class="container position-relative" style="z-index: 2;" data-aos="fade-down">
        <span class="badge bg-warning text-dark rounded-pill px-3 py-2 mb-3 fw-bold shadow-sm">
            <i class="bi bi-clock-history me-1"></i> Jadwal Sholat & Imsakiyah
        </span>
        <h1 class="display-3 fw-bold mb-3">Jadwal Sholat</h1>
        <p class="lead mb-0 fs-4">Cari jadwal sholat sesuai lokasi Anda</p>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mt-4">
                <li class="breadcrumb-item"><a href="/" class="text-white text-decoration-none">Beranda</a></li>
                <li class="breadcrumb-item active text-white-50" aria-current="page">Jadwal Sholat</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Main Content -->
<section class="py-5 bg-light min-vh-100">
    <div class="container py-4">

        <!-- Pencarian Lokasi Card -->
        <div class="card border-0 shadow-sm rounded-4 mb-5" data-aos="fade-up">
            <div class="card-body p-4 p-md-5">
                <div class="text-center mb-4">
                    <h3 class="fw-bold text-success"><i class="bi bi-geo-alt-fill me-2"></i>Pilih Lokasi Anda</h3>
                    <p class="text-muted">Pilih provinsi dan kabupaten/kota untuk menampilkan jadwal sholat selama 1
                        bulan</p>
                </div>
                <div class="row justify-content-center g-3">
                    <div class="col-md-4">
                        <label for="provinsi"
                            class="form-label fw-bold text-muted small text-uppercase">Provinsi</label>
                        <select id="provinsi" class="form-select border-success shadow-sm rounded-pill">
                            <option value="">-- Pilih Provinsi --</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="kabkota" class="form-label fw-bold text-muted small text-uppercase">Kabupaten /
                            Kota</label>
                        <select id="kabkota" class="form-select border-success shadow-sm rounded-pill">
                            <option value="">-- Pilih Kota/Kab --</option>
                        </select>
                    </div>
                    <div class="col-md-2 d-flex align-items-end">
                        <button onclick="ambilJadwal()"
                            class="btn btn-success w-100 rounded-pill shadow-sm fw-bold py-2">
                            <i class="bi bi-search me-1"></i> Tampilkan
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Hasil Jadwal -->
        <div id="hasil" data-aos="fade-up" data-aos-delay="100">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body p-4 p-md-5 text-center">
                    <i class="bi bi-calendar-week display-1 text-success opacity-25 mb-3 d-block"></i>
                    <h4 class="fw-bold text-dark">Jadwal Belum Ditampilkan</h4>
                    <p class="text-muted mb-0">Silakan pilih provinsi dan kabupaten/kota di atas, lalu klik tombol
                        <strong>Tampilkan</strong>.</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Info Section -->
<section class="py-5 bg-white">
    <div class="container" data-aos="fade-up">
        <div
            class="row align-items-center bg-success text-white rounded-5 p-5 position-relative overflow-hidden shadow-lg mx-lg-5">
            <div class="position-absolute top-0 start-0 w-100 h-100"
                style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 25px 25px; opacity: 0.08;">
            </div>
            <div class="col-lg-8 position-relative mb-4 mb-lg-0" style="z-index: 2;">
                <h2 class="fw-bold display-6 mb-3">Sholat Tepat Waktu</h2>
                <p class="lead mb-0 text-white-50">"Sesungguhnya shalat itu adalah kewajiban yang ditentukan waktunya
                    atas orang-orang yang beriman." (QS. An-Nisa: 103)</p>
            </div>
            <div class="col-lg-4 text-lg-end position-relative" style="z-index: 2;">
                <a href="/" class="btn btn-warning btn-lg rounded-pill px-5 fw-bold text-dark shadow-sm">
                    Kembali ke Beranda
                </a>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const provinsiSelect = document.getElementById("provinsi");
        const kabkotaSelect = document.getElementById("kabkota");
        const hasilDiv = document.getElementById("hasil");

        // ======================
        // 1️⃣ Ambil daftar provinsi
        // ======================
        fetch("https://equran.id/api/v2/shalat/provinsi")
            .then(res => res.json())
            .then(data => {
                data.data.forEach(prov => {
                    let option = document.createElement("option");
                    if (typeof prov === 'object') {
                        option.value = prov.id;
                        option.textContent = prov.nama;
                    } else {
                        option.value = prov;
                        option.textContent = prov;
                    }
                    provinsiSelect.appendChild(option);
                });
            })
            .catch(err => console.error("Gagal muat provinsi", err));

        // ======================
        // 2️⃣ Ambil kab/kota ketika provinsi dipilih
        // ======================
        provinsiSelect.addEventListener("change", function () {
            kabkotaSelect.innerHTML = '<option value="">-- Pilih Kabupaten/Kota --</option>';
            if (!this.value) return;

            fetch("https://equran.id/api/v2/shalat/kabkota", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ provinsi: this.value })
            })
                .then(res => res.json())
                .then(data => {
                    data.data.forEach(kab => {
                        let option = document.createElement("option");
                        if (typeof kab === 'object') {
                            option.value = kab.id;
                            option.textContent = kab.nama;
                        } else {
                            option.value = kab;
                            option.textContent = kab;
                        }
                        kabkotaSelect.appendChild(option);
                    });
                })
                .catch(err => console.error("Gagal muat kota", err));
        });

        // ======================
        // 3️⃣ Ambil jadwal sholat
        // ======================
        window.ambilJadwal = function () {
            const provinsi = provinsiSelect.value;
            const kabkota = kabkotaSelect.value;
            const provinsiNama = provinsiSelect.options[provinsiSelect.selectedIndex].text;
            const kabkotaNama = kabkotaSelect.options[kabkotaSelect.selectedIndex].text;

            if (!provinsi || !kabkota) {
                alert("Silakan pilih provinsi dan kabupaten/kota!");
                return;
            }

            const today = new Date();
            const bulan = today.getMonth() + 1;
            const tahun = today.getFullYear();

            hasilDiv.innerHTML = `
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body p-5 text-center">
                    <div class="spinner-border text-success" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <p class="text-muted mt-3 mb-0">Memuat jadwal sholat...</p>
                </div>
            </div>`;

            fetch("https://equran.id/api/v2/shalat", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({
                    provinsi: provinsi,
                    kabkota: kabkota,
                    bulan: bulan,
                    tahun: tahun
                })
            })
                .then(res => res.json())
                .then(data => {
                    if (!data.data || !data.data.jadwal) {
                        hasilDiv.innerHTML = `
                    <div class="card border-0 shadow-sm rounded-4">
                        <div class="card-body p-5 text-center">
                            <i class="bi bi-exclamation-triangle display-3 text-warning mb-3 d-block"></i>
                            <h5 class="fw-bold">Data Tidak Ditemukan</h5>
                            <p class="text-muted mb-0">Coba pilih lokasi yang berbeda.</p>
                        </div>
                    </div>`;
                        return;
                    }

                    let jadwal = data.data.jadwal;

                    const namaHari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
                    const namaBulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni",
                        "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

                    let bulanNama = namaBulan[bulan - 1];
                    let todayDate = today.getDate();

                    let html = `
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                    <div class="card-header bg-success text-white p-4 text-center border-0">
                        <h3 class="fw-bold mb-1"><i class="bi bi-geo-alt-fill me-2"></i>${kabkotaNama}, ${provinsiNama}</h3>
                        <span class="badge bg-white text-success fs-6 rounded-pill px-3 py-2 mt-2">
                            <i class="bi bi-calendar-month me-1"></i> Bulan ${bulanNama} ${tahun}
                        </span>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered m-0 align-middle text-center">
                                <thead class="table-light">
                                    <tr>
                                        <th class="py-3 text-start ps-4 fw-bold">Hari & Tanggal</th>
                                        <th class="py-3 fw-bold"><i class="bi bi-moon-stars me-1"></i> Imsak</th>
                                        <th class="py-3 fw-bold"><i class="bi bi-sunrise me-1"></i> Subuh</th>
                                        <th class="py-3 fw-bold"><i class="bi bi-sun me-1"></i> Dzuhur</th>
                                        <th class="py-3 fw-bold"><i class="bi bi-brightness-high me-1"></i> Ashar</th>
                                        <th class="py-3 fw-bold"><i class="bi bi-sunset me-1"></i> Maghrib</th>
                                        <th class="py-3 fw-bold"><i class="bi bi-moon me-1"></i> Isya</th>
                                    </tr>
                                </thead>
                                <tbody>
            `;

                    jadwal.forEach(item => {
                        let isToday = false;
                        // item.tanggal bisa berupa angka (1,2,3..) atau string tanggal
                        let tgl = parseInt(item.tanggal);
                        let itemDateObj = new Date(tahun, bulan - 1, tgl);
                        let hari = namaHari[itemDateObj.getDay()];

                        if (tgl === todayDate) {
                            isToday = true;
                        }

                        let rowClass = isToday ? "table-warning fw-bold" : "";
                        let todayBadge = isToday ? ' <span class="badge bg-success rounded-pill ms-2 fw-normal">Hari ini</span>' : '';

                        html += `
                    <tr class="${rowClass}">
                        <td class="text-start ps-4">${hari}, ${tgl} ${bulanNama} ${tahun}${todayBadge}</td>
                        <td>${item.imsak}</td>
                        <td>${item.subuh}</td>
                        <td>${item.dzuhur}</td>
                        <td>${item.ashar}</td>
                        <td>${item.maghrib}</td>
                        <td>${item.isya}</td>
                    </tr>
                `;
                    });

                    html += `
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer bg-light text-center p-3 border-0">
                        <small class="text-muted"><i class="bi bi-info-circle me-1"></i> Sumber data: equran.id | Baris kuning menandakan hari ini</small>
                    </div>
                </div>`;

                    hasilDiv.innerHTML = html;

                    // Scroll ke hasil
                    hasilDiv.scrollIntoView({ behavior: 'smooth', block: 'start' });
                })
                .catch(err => {
                    console.error(err);
                    hasilDiv.innerHTML = `
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body p-5 text-center">
                        <i class="bi bi-wifi-off display-3 text-danger mb-3 d-block"></i>
                        <h5 class="fw-bold">Gagal Mengambil Jadwal</h5>
                        <p class="text-muted mb-3">Pastikan koneksi internet Anda lancar, lalu coba lagi.</p>
                        <button onclick="ambilJadwal()" class="btn btn-outline-success rounded-pill px-4">
                            <i class="bi bi-arrow-clockwise me-1"></i> Coba Lagi
                        </button>
                    </div>
                </div>`;
                });
        }
    });
</script>

<?= $this->endSection(); ?>