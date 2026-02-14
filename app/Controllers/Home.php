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
            'menu' => 'kegiatan'
        ];
        return view('pages/kegiatan', $data);
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
                'img' => '/asset/images/depan-masjid.jpg' // Using existing image for now
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
                'img' => '/asset/images/kasih-sayang.jpg'
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
                'img' => '/asset/images/quran.jpg'
            ]
        ];
    }
}
