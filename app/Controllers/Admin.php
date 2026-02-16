<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Dashboard | Admin Masjid An Namiroh Firdaus',
            'menu' => 'dashboard'
        ];
        return view('admin/dashboard', $data);
    }

    public function login(): string
    {
        $data = [
            'title' => 'Login Admin | Masjid An Namiroh Firdaus'
        ];
        return view('admin/login', $data);
    }

    public function infaq(): string
    {
        $data = [
            'title' => 'Kelola Infaq | Admin Masjid An Namiroh Firdaus',
            'menu' => 'infaq'
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

    public function logout(): string
    {
        return view('pages/home');
    }
}
