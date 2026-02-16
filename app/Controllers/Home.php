<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda | Portal Masjid Nurul Iman',
            'menu' => 'home'
        ];
        return view('pages/home', $data);
    }

    public function profil()
    {
        $data = [
            'title' => 'Profil Masjid | Portal Masjid Nurul Iman',
            'menu' => 'profil'
        ];
        return view('pages/profil', $data);
    }

    public function kegiatan()
    {
        $data = [
            'title' => 'Kegiatan | Portal Masjid Nurul Iman',
            'menu' => 'kegiatan',
            'kegiatan' => $this->getKegiatanData()
        ];
        return view('pages/kegiatan', $data);
    }

    public function detailKegiatan($slug)
    {
        $kegiatanList = $this->getKegiatanData();
        $kegiatan = null;
        foreach ($kegiatanList as $item) {
            if ($item['slug'] == $slug) {
                $kegiatan = $item;
                break;
            }
        }

        if (!$kegiatan) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data = [
            'title' => $kegiatan['judul'] . ' | Portal Masjid Nurul Iman',
            'menu' => 'kegiatan',
            'kegiatan' => $kegiatan,
            'terkait' => array_slice($kegiatanList, 0, 3) // Simulating related activities
        ];
        return view('pages/detail_kegiatan', $data);
    }

    public function jadwalSholat()
    {
        $data = [
            'title' => 'Jadwal Sholat | Portal Masjid Nurul Iman',
            'menu' => 'jadwal'
        ];
        return view('pages/jadwal_sholat', $data);
    }

    public function kontak()
    {
        $data = [
            'title' => 'Hubungi Kami | Portal Masjid Nurul Iman',
            'menu' => 'kontak'
        ];
        return view('pages/kontak', $data);
    }

    public function berita()
    {
        $data = [
            'title' => 'Berita & Artikel | Portal Masjid Nurul Iman',
            'menu' => 'berita',
            'berita' => $this->getBeritaData()
        ];
        return view('pages/berita', $data);
    }

    public function detailBerita($slug)
    {
        $beritaList = $this->getBeritaData();
        $berita = null;
        foreach ($beritaList as $item) {
            if ($item['slug'] == $slug) {
                $berita = $item;
                break;
            }
        }

        if (!$berita) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $data = [
            'title' => $berita['judul'] . ' | Portal Masjid Nurul Iman',
            'menu' => 'berita',
            'berita' => $berita,
            'terkait' => array_slice($beritaList, 0, 3) // Simulating related news
        ];
        return view('pages/detail_berita', $data);
    }

    private function getKegiatanData()
    {
        return [
            [
                'slug' => 'tafsir-quran-juz-amma',
                'kategori' => 'kajian',
                'judul' => "Tafsir Al-Qur'an Juz Amma",
                'deskripsi' => "Mengkaji makna dan kandungan surat-surat pendek untuk meningkatkan pemahaman Al-Qur'an dan keimanan.",
                'konten' => '<p>Kajian Tafsir Al-Qur\'an Juz Amma ini diperuntukkan bagi seluruh jamaah yang ingin memperdalam pemahaman terhadap surat-surat pendek yang sering dibaca dalam sholat.</p>
                             <p>Materi kajian meliputi:</p>
                             <ul>
                                <li>Asbabun Nuzul (Sebab turunnya ayat)</li>
                                <li>Makna kata per kata (Mufradat)</li>
                                <li>Kandungan hukum dan hikmah</li>
                                <li>Pelajaran (Ibroh) yang dapat diambil</li>
                             </ul>
                             <p>Kajian ini dilaksanakan secara rutin setiap pekan dan terbuka untuk umum. Mari ajak keluarga dan sahabat untuk hadir di majelis ilmu ini.</p>',
                'gambar' => "/asset/images/kajian_masjid.webp",
                'fallback' => "https://images.unsplash.com/photo-1542810634-71277d95dcbb?auto=format&fit=crop&w=400&q=80",
                'hari' => "Ahad",
                'jam' => "Ba'da Subuh",
                'lokasi' => "Masjid Utama",
                'pemateri' => "Ust. Abdul Hamid",
                'badge' => "Kajian Rutin",
                'badge_icon' => "bi-book",
                'badge_color' => "success",
                'delay' => 0
            ],
            [
                'slug' => 'olahraga-sunnah-memanah',
                'kategori' => 'remaja',
                'judul' => "Olahraga Sunnah Memanah",
                'deskripsi' => "Latihan rutin memanah bagi remaja masjid untuk melatih fokus, kekuatan fisik, dan menghidupkan sunnah.",
                'konten' => '<p>Program Olahraga Sunnah Memanah ini bertujuan untuk memfasilitasi remaja masjid dalam menyalurkan hobi sekaligus menghidupkan sunnah Rasulullah SAW.</p>
                             <p>"Ajarilah anak-anak kalian berkuda, berenang, dan memanah." (HR. Bukhari Muslim)</p>
                             <p>Kegiatan ini dibimbing langsung oleh instruktur berpengalaman. Fasilitas alat panah disediakan oleh masjid, namun peserta diperbolehkan membawa peralatan sendiri.</p>
                             <p><strong>Manfaat Memanah:</strong></p>
                             <ul>
                                <li>Melatih fokus dan konsentrasi</li>
                                <li>Menguatkan otot punggung dan lengan</li>
                                <li>Melatih kesabaran dan ketenangan emosi</li>
                                <li>Membangun karakter disiplin</li>
                             </ul>',
                'gambar' => "/asset/images/olahraga.webp",
                'fallback' => "",
                'hari' => "Sabtu",
                'jam' => "08:00 WIB",
                'lokasi' => "Halaman Belakang",
                'pemateri' => "Coach Rahmat",
                'badge' => "Remaja",
                'badge_icon' => "bi-people",
                'badge_color' => "warning",
                'delay' => 100
            ],
            [
                'slug' => 'belajar-membaca-alquran',
                'kategori' => 'pendidikan',
                'judul' => "Belajar Membaca Al-Qur'an",
                'deskripsi' => "Program intensif perbaikan bacaan (Tahsin) untuk anak-anak TPA dengan metode yang menyenangkan.",
                'konten' => '<p>Program ini dirancang khusus untuk anak-anak usia dini hingga sekolah dasar yang ingin belajar membaca Al-Qur\'an dari dasar atau memperbaiki bacaannya (Tahsin).</p>
                             <p>Kami menggunakan metode pembelajaran yang interaktif dan menyenangkan agar anak-anak tidak merasa bosan. Setiap anak akan mendapatkan perhatian khusus sesuai dengan kemampuan bacaannya masing-masing.</p>
                             <p><strong>Kurikulum Pembelajaran:</strong></p>
                             <ul>
                                <li>Pengenalan huruf Hijaiyah</li>
                                <li>Makharijul Huruf (Tempat keluarnya huruf)</li>
                                <li>Hukum Tajwid Dasar</li>
                                <li>Kelancaran Membaca</li>
                             </ul>',
                'gambar' => "/asset/images/quran.webp",
                'fallback' => "https://plus.unsplash.com/premium_photo-1661775756810-82dbd209fc95?auto=format&fit=crop&w=400&q=80",
                'hari' => "Senin-Kamis",
                'jam' => "16:00 WIB",
                'lokasi' => "Kelas TPA",
                'pemateri' => "Ustjh. Fatimah",
                'badge' => "Pendidikan",
                'badge_icon' => "bi-mortarboard",
                'badge_color' => "info",
                'delay' => 200
            ],
            [
                'slug' => 'aksi-donor-darah',
                'kategori' => 'sosial',
                'judul' => "Aksi Donor Darah",
                'deskripsi' => "Setetes darah Anda nyawa bagi sesama. Bekerjasama dengan PMI Kota untuk membantu ketersediaan stok darah.",
                'konten' => '<p>Aksi Donor Darah ini merupakan wujud kepedulian sosial jamaah Masjid Nurul Iman terhadap sesama. Kegiatan ini rutin dilaksanakan setiap 3 bulan sekali bekerja sama dengan Palang Merah Indonesia (PMI) Kota.</p>
                             <p>Setetes darah yang Anda sumbangkan sangat berarti bagi mereka yang membutuhkan. Selain bernilai ibadah dan kemanusiaan, donor darah juga menyehatkan tubuh pendonor.</p>
                             <p><strong>Persyaratan Donor:</strong></p>
                             <ul>
                                <li>Usia 17-60 tahun</li>
                                <li>Berat badan minimal 45 kg</li>
                                <li>Sehat jasmani dan rohani</li>
                                <li>Tidak sedang mengonsumsi obat-obatan tertentu</li>
                                <li>Tidur cukup minimal 5 jam sebelum donor</li>
                             </ul>',
                'gambar' => "/asset/images/kasih-sayang.webp",
                'fallback' => "https://images.unsplash.com/photo-1593113598332-cd288d649433?auto=format&fit=crop&w=400&q=80",
                'hari' => "3 Bulan Sekali",
                'jam' => "09:00 WIB",
                'lokasi' => "Aula Serbaguna",
                'pemateri' => "PMI Kota",
                'badge' => "Sosial",
                'badge_icon' => "bi-heart",
                'badge_color' => "danger",
                'delay' => 0
            ],
            [
                'slug' => 'jumat-berkah-berbagi',
                'kategori' => 'sosial',
                'judul' => "Jumat Berkah Berbagi",
                'deskripsi' => "Mari berbagi kebahagiaan dengan sedekah makanan (nasi box) untuk jamaah sholat Jumat dan kaum dhuafa.",
                'konten' => '<p>Program Jumat Berkah Berbagi adalah kegiatan rutin pembagian nasi box/snack kepada jamaah sholat Jumat, musafir, dan kaum dhuafa di sekitar lingkungan masjid.</p>
                             <p>Kami membuka kesempatan seluas-luasnya bagi para donatur yang ingin menyisihkan sebagian rezekinya untuk program ini. Donasi dapat berupa uang tunai maupun makanan siap santap.</p>
                             <p>"Sedekah itu dapat menghapus dosa sebagaimana air itu memadamkan api." (HR. At-Tirmidzi)</p>
                             <p>Semoga Allah SWT memberkahi rezeki kita semua dan menerima amal ibadah kita.</p>',
                'gambar' => "/asset/images/jumaat_berkah.webp",
                'fallback' => "https://images.unsplash.com/photo-1606787366850-de6330128bfc?auto=format&fit=crop&w=400&q=80",
                'hari' => "Jumat",
                'jam' => "11:30 WIB",
                'lokasi' => "Halaman Bawah",
                'pemateri' => "Petugas Masjid",
                'badge' => "Sosial",
                'badge_icon' => "bi-heart",
                'badge_color' => "danger",
                'delay' => 100
            ]
        ];
    }

    private function getBeritaData()
    {
        return [
            [
                'slug' => 'kegiatan-ramadhan-1445h',
                'judul' => 'Persiapan Kegiatan Ramadhan 1445H',
                'tanggal' => '10 Maret 2024',
                'penulis' => 'Admin Masjid',
                'excerpt' => 'Menyambut bulan suci Ramadhan, Masjid Nurul Iman telah menyiapkan berbagai rangkaian kegiatan ibadah dan sosial.',
                'konten' => '<p>Menyambut bulan suci Ramadhan, Masjid Nurul Iman telah menyiapkan berbagai rangkaian kegiatan ibadah dan sosial untuk memakmurkan masjid dan melayani jamaah.</p>
                             <p>Beberapa kegiatan unggulan yang akan dilaksanakan antara lain:</p>
                             <ul>
                                <li>Sholat Tarawih berjamaah dengan imam hafidz Qur\'an</li>
                                <li>Kajian subuh dan menjelang berbuka puasa</li>
                                <li>Buka puasa bersama gratis setiap hari</li>
                                <li>I\'tikaf 10 hari terakhir Ramadhan</li>
                                <li>Penerimaan dan penyaluran Zakat, Infaq, dan Shodaqoh</li>
                             </ul>
                             <p>Kami mengajak seluruh jamaah untuk turut berpartisipasi dalam kegiatan-kegiatan tersebut, baik sebagai peserta maupun donatur. Mari kita jadikan Ramadhan tahun ini lebih baik dari tahun-tahun sebelumnya.</p>',
                'img' => '/asset/images/depan-masjid.webp' // Using existing image for now
            ],
            [
                'slug' => 'santunan-yatim-piatu',
                'judul' => 'Santunan Anak Yatim dan Dhuafa',
                'tanggal' => '25 Februari 2024',
                'penulis' => 'Panitia Sosial',
                'excerpt' => 'Alhamdulillah, telah terlaksana kegiatan santunan bulanan untuk 50 anak yatim dan dhuafa di lingkungan sekitar masjid.',
                'konten' => '<p>Alhamdulillah, berkat dukungan para donatur dan jamaah sekalian, telah terlaksana kegiatan santunan bulanan untuk 50 anak yatim dan dhuafa di lingkungan sekitar masjid pada hari Ahad, 25 Februari 2024.</p>
                             <p>Kegiatan ini merupakan program rutin Divisi Sosial Masjid Nurul Iman yang bertujuan untuk meringankan beban saudara-saudara kita yang membutuhkan. Selain uang tunai, paket sembako juga dibagikan kepada para penerima manfaat.</p>
                             <p>"Barangsiapa yang memelihara anak yatim di tengah kaum muslimin, memberinya makan dan minum, maka Allah pastikan baginya surga, kecuali jika ia melakukan dosa yang tidak bisa diampuni." (HR. Tirmidzi). Semoga Allah membalas kebaikan para donatur dengan pahala yang berlipat ganda.</p>',
                'img' => '/asset/images/kasih-sayang.webp'
            ],
            [
                'slug' => 'penerimaan-santri-tpa',
                'judul' => 'Pendaftaran Santri Baru TPA',
                'tanggal' => '20 Februari 2024',
                'penulis' => 'Kepala TPA',
                'excerpt' => 'Taman Pendidikan Al-Qur\'an (TPA) Masjid Nurul Iman membuka pendaftaran santri baru tahun ajaran 2024/2025.',
                'konten' => '<p>Taman Pendidikan Al-Qur\'an (TPA) Masjid Nurul Iman kembali membuka pendaftaran santri baru untuk tahun ajaran 2024/2025. Kami mengundang putra-putri Bapak/Ibu untuk bergabung menjadi generasi Qur\'ani yang berakhlak mulia.</p>
                             <p>Program pendidikan yang kami tawarkan meliputi:</p>
                             <ul>
                                <li>Baca Tulis Al-Qur\'an (Metode Tilawati)</li>
                                <li>Hafalan Juz Amma dan Surat Pilihan</li>
                                <li>Praktik Ibadah Sholat dan Wudhu</li>
                                <li>Kisah Nabi dan Rasul</li>
                                <li>Adab dan Akhlak Sehari-hari</li>
                             </ul>
                             <p>Pendaftaran dibuka mulai tanggal 20 Februari hingga 30 Maret 2024. Formulir pendaftaran dapat diambil di sekretariat TPA setiap sore hari kerja (16.00 - 17.30 WIB).</p>',
                'img' => '/asset/images/quran.webp'
            ]
        ];
    }
}
