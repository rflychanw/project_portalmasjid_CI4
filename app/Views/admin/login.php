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
            --primary-color: #198754;
            --main-bg: #f8fafc;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--main-bg);
            background-image:
                radial-gradient(at 0% 0%, rgba(25, 135, 84, 0.05) 0px, transparent 50%),
                radial-gradient(at 100% 100%, rgba(25, 135, 84, 0.05) 0px, transparent 50%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            border: none;
            border-radius: 24px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.04);
            width: 100%;
            max-width: 450px;
            padding: 2.5rem;
            background: white;
        }

        .login-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .login-logo {
            width: 70px;
            height: 70px;
            background-color: rgba(25, 135, 84, 0.1);
            color: var(--primary-color);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin: 0 auto 1.5rem;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border: none;
            padding: 0.8rem;
            border-radius: 12px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #157347;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(25, 135, 84, 0.2);
        }

        .form-control {
            padding: 0.8rem 1.2rem;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            background-color: #f8fafc;
        }

        .form-control:focus {
            box-shadow: 0 0 0 4px rgba(25, 135, 84, 0.1);
            border-color: var(--primary-color);
            background-color: white;
        }

        .input-group-text {
            background-color: #f8fafc;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            color: #64748b;
        }

        .form-label {
            font-weight: 600;
            font-size: 0.9rem;
            color: #475569;
            margin-bottom: 0.5rem;
        }

        .back-to-web {
            text-align: center;
            margin-top: 1.5rem;
        }

        .back-to-web a {
            color: #64748b;
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.2s ease;
        }

        .back-to-web a:hover {
            color: var(--primary-color);
        }
    </style>
</head>

<body>

    <div class="login-card">
        <div class="login-header">
            <div class="login-logo">
                <i class="bi bi-moon-stars-fill"></i>
            </div>
            <h4 class="fw-bold mb-1">Masuk ke Panel Admin</h4>
            <p class="text-muted">Gunakan akun Anda untuk mengelola portal</p>
        </div>

            <!-- <div class="alert alert-danger py-2 small border-0 mb-4"
                style="background-color: rgba(220, 53, 69, 0.1); color: #dc3545;">
                <i class="bi bi-exclamation-circle me-2"></i>
            </div> -->

        <form action="/admin/login" method="post">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <div class="input-group">
                    <span class="input-group-text border-end-0"><i class="bi bi-person"></i></span>
                    <input type="text" class="form-control border-start-0" placeholder="Masukkan username"
                        id="user_name" name="user_name" value="<?= old('user_name') ?>">
                </div>
            </div>

            <div class="mb-4">
                <div class="d-flex justify-content-between align-items-center">
                    <label class="form-label">Password</label>
                    <a href="#" class="text-success text-decoration-none small fw-600">Lupa Password?</a>
                </div>
                <div class="input-group">
                    <span class="input-group-text border-end-0"><i class="bi bi-lock"></i></span>
                    <input type="password" class="form-control border-start-0" placeholder="Masukkan password"
                        id="password" name="password">
                </div>
            </div>

            <div class="mb-4 form-check">
                <input type="checkbox" class="form-check-input" id="remember">
                <label class="form-check-label small text-muted" for="remember">Ingat saya di perangkat ini</label>
            </div>

            <button type="submit" class="btn btn-primary w-100 mb-3">
                Masuk Sekarang
            </button>
        </form>

        <div class="back-to-web">
            <a href="/">
                <i class="bi bi-arrow-left me-1"></i> Kembali ke Beranda
            </a>
        </div>
    </div>

</body>

</html>