<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $title; ?>
    </title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        :root {
            --primary-color: #0d6efd;
            --secondary-color: #6c757d;
            --success-color: #198754;
            --info-color: #0dcaf0;
            --warning-color: #ffc107;
            --danger-color: #dc3545;
            --dark-color: #212529;
            --sidebar-width: 260px;
            --sidebar-bg: #ffffff;
            --main-bg: #f8f9fa;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--main-bg);
            color: #334155;
            overflow-x: hidden;
        }

        /* Sidebar Styles */
        #sidebar {
            width: var(--sidebar-width);
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            z-index: 1000;
            background-color: var(--sidebar-bg);
            border-right: 1px solid rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .sidebar-header {
            padding: 1.5rem;
            display: flex;
            align-items: center;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        }

        .sidebar-brand {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--success-color);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .nav-link {
            padding: 0.8rem 1.5rem;
            color: #64748b;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 12px;
            transition: all 0.2s ease;
            margin: 0.2rem 0.8rem;
            border-radius: 8px;
        }

        .nav-link:hover {
            background-color: rgba(25, 135, 84, 0.05);
            color: var(--success-color);
        }

        .nav-link.active {
            background-color: var(--success-color);
            color: white;
            box-shadow: 0 4px 12px rgba(25, 135, 84, 0.2);
        }

        .nav-link i {
            font-size: 1.2rem;
        }

        /* Content Styles */
        #content {
            margin-left: var(--sidebar-width);
            min-height: 100vh;
            transition: all 0.3s ease;
            padding: 2rem;
        }

        /* Navbar Top */
        .navbar-top {
            background-color: white;
            padding: 1rem 2rem;
            margin-bottom: 2rem;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 12px;
            cursor: pointer;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--success-color), #20c997);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
        }

        /* Cards */
        .card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .stat-card {
            padding: 1.5rem;
        }

        .stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        /* Responsive */
        @media (max-width: 991.98px) {
            #sidebar {
                margin-left: calc(-1 * var(--sidebar-width));
            }

            #sidebar.active {
                margin-left: 0;
            }

            #content {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>

    <!-- Sidebar -->
    <div id="sidebar">
        <div class="sidebar-header">
            <a href="/admin/dashboard" class="sidebar-brand">
                <i class="bi bi-moon-stars-fill"></i>
                <span>Admin Masjid</span>
            </a>
        </div>
        <div class="mt-3">
            <a href="/admin/dashboard" class="nav-link <?= $menu == 'dashboard' ? 'active' : '' ?>">
                <i class="bi bi-grid-1x2-fill"></i>
                <span>Dashboard</span>
            </a>
            <a href="/admin/berita" class="nav-link <?= $menu == 'berita' ? 'active' : '' ?>">
                <i class="bi bi-newspaper"></i>
                <span>Kelola Berita</span>
            </a>
            <a href="/admin/kegiatan" class="nav-link <?= $menu == 'kegiatan' ? 'active' : '' ?>">
                <i class="bi bi-calendar-event"></i>
                <span>Kelola Kegiatan</span>
            </a>
            <a href="/admin/jadwal" class="nav-link <?= $menu == 'jadwal' ? 'active' : '' ?>">
                <i class="bi bi-clock-fill"></i>
                <span>Jadwal Sholat</span>
            </a>
            <a href="/admin/infaq" class="nav-link <?= $menu == 'infaq' ? 'active' : '' ?>">
                <i class="bi bi-cash-stack"></i>
                <span>Kelola Infaq</span>
            </a>
            <hr class="mx-3 opacity-10">
            <a href="/" class="nav-link">
                <i class="bi bi-house-door"></i>
                <span>Lihat Website</span>
            </a>
            <a href="/admin/login" class="nav-link text-danger">
                <i class="bi bi-box-arrow-right"></i>
                <span>Logout</span>
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <div id="content">
        <!-- Top Navbar -->
        <div class="navbar-top">
            <div class="d-flex align-items-center">
                <button class="btn btn-link d-lg-none" id="sidebarToggle">
                    <i class="bi bi-list fs-2"></i>
                </button>
                <h4 class="mb-0 fw-bold">Selamat Datang, Admin</h4>
            </div>
            <div class="user-profile dropdown">
                <div class="user-avatar" data-bs-toggle="dropdown">A</div>
                <div class="d-none d-md-block" data-bs-toggle="dropdown">
                    <div class="fw-bold" style="font-size: 0.9rem;">Administrator</div>
                    <div class="text-muted" style="font-size: 0.8rem;">Super Admin</div>
                </div>
                <ul class="dropdown-menu dropdown-menu-end shadow border-0 mt-2">
                    <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i> Profil</a></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i> Pengaturan</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item text-danger" href="#"><i class="bi bi-box-arrow-right me-2"></i>
                            Keluar</a></li>
                </ul>
            </div>
        </div>

        <!-- Render Content Section -->
        <?= $this->renderSection('content'); ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('sidebarToggle')?.addEventListener('click', function () {
            document.getElementById('sidebar').classList.toggle('active');
        });
    </script>
</body>

</html>