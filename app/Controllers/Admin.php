<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Dashboard | Admin Masjid An Namiroh Firdaus',
            'menu' => 'dashboard',
            'stats' => [
                'total_berita' => 24,
                'total_kegiatan' => 12,
                'infaq_masuk' => 12500000,
                'infaq_keluar' => 4200000,
                'saldo' => 45750000
            ],
            'kegiatan_mendatang' => [
                [
                    'judul' => 'Kajian Rutin Malam Jumat',
                    'sub' => 'Fiqih Ibadah',
                    'tanggal' => '20 Feb 2024',
                    'status' => 'Terjadwal',
                    'icon' => 'bi-book',
                    'color' => 'success'
                ],
                [
                    'judul' => 'Baksos Ramadhan',
                    'sub' => 'Sosial Kemasyarakatan',
                    'tanggal' => '25 Feb 2024',
                    'status' => 'Coming Soon',
                    'icon' => 'bi-megaphone',
                    'color' => 'primary'
                ]
            ],
            'chart_data' => [
                'labels' => ['Sep', 'Okt', 'Nov', 'Des', 'Jan', 'Feb'],
                'masuk' => [5000000, 7500000, 6000000, 9000000, 11000000, 12500000],
                'keluar' => [3000000, 4000000, 3500000, 5000000, 4500000, 4200000]
            ]
        ];
        return view('admin/dashboard', $data);
    }

    public function login(): string|\CodeIgniter\HTTP\RedirectResponse
    {
        if (session()->get('logged_in')) {
            return redirect()->to('/admin/dashboard');
        }

        $data = [
            'title' => 'Login Admin | Masjid An Namiroh Firdaus'
        ];
        return view('admin/login', $data);
    }

    public function auth()
    {
        $username = $this->request->getPost('user_name');
        $password = $this->request->getPost('password');

        // Demo credentials
        $demo_user = 'username';
        $demo_pass = 'password123';

        if ($username === $demo_user && $password === $demo_pass) {
            $session_data = [
                'username' => $username,
                'logged_in' => TRUE
            ];
            session()->set($session_data);
            return redirect()->to('/admin/dashboard');
        } else {
            session()->setFlashdata('error', 'Username atau Password salah!');
            return redirect()->to('/admin/login');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/admin/login');
    }

    public function infaq(): string
    {
        $data = [
            'title' => 'Kelola Infaq | Admin Masjid An Namiroh Firdaus',
            'menu' => 'infaq',
            'chart_data' => [
                'labels' => ['Minggu 1', 'Minggu 2', 'Minggu 3', 'Minggu 4'],
                'masuk' => [2500000, 3700000, 2100000, 4200000],
                'keluar' => [1200000, 800000, 1500000, 700000]
            ]
        ];
        return view('admin/infaq', $data);
    }

    public function jadwal(): string
    {
        $data = [
            'title' => 'Kelola Jadwal | Admin Masjid An Namiroh Firdaus',
            'menu' => 'jadwal'
        ];
        return view('admin/jadwal', $data);
    }

    public function berita(): string
    {
        $data = [
            'title' => 'Kelola Berita | Admin Masjid An Namiroh Firdaus',
            'menu' => 'berita'
        ];
        return view('admin/berita', $data);
    }

    public function tambah_berita(): string
    {
        $data = [
            'title' => 'Tambah Berita | Admin Masjid An Namiroh Firdaus',
            'menu' => 'berita'
        ];
        return view('admin/tambah_berita', $data);
    }

    public function kegiatan(): string
    {
        $data = [
            'title' => 'Kelola Kegiatan | Admin Masjid An Namiroh Firdaus',
            'menu' => 'kegiatan'
        ];
        return view('admin/kegiatan', $data);
    }

    public function tambah_kegiatan(): string
    {
        $data = [
            'title' => 'Tambah Kegiatan | Admin Masjid An Namiroh Firdaus',
            'menu' => 'kegiatan'
        ];
        return view('admin/tambah_kegiatan', $data);
    }

}
