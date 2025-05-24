<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Selamat Datang</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background: linear-gradient(135deg, #ff9a9e, #fbc7c7);
            color: #fff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .welcome-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 2rem;
        }
        h1 {
            font-weight: 700;
            text-shadow: 1px 1px 5px rgba(0,0,0,0.2);
        }
        p.lead {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.15);
        }
        .btn-login {
            background-color: #e91e63;  /* pink */
            border: none;
            box-shadow: 0 4px 10px rgba(233, 30, 99, 0.5);
            color: white;
        }
        .btn-login:hover {
            background-color: #c2185b;
        }
        .btn-register {
            color: #e91e63;
            border-color: #e91e63;
            box-shadow: 0 4px 10px rgba(233, 30, 99, 0.3);
        }
        .btn-register:hover {
            background-color: #e91e63;
            color: #fff;
        }
        footer {
            background: rgba(0,0,0,0.1);
            padding: 1rem 0;
            text-align: center;
            font-weight: 500;
            color: #eee;
        }
    </style>
</head>
<body>

    <div class="welcome-container">
        <h1>Selamat Datang di Aplikasi Kami</h1>
        <p class="lead">Silakan login atau daftar untuk melanjutkan.</p>

        <div class="d-flex gap-3">
            <a href="{{ route('login') }}" class="btn btn-login btn-lg px-4">Login</a>
            <a href="{{ route('register') }}" class="btn btn-register btn-lg px-4">Register</a>
        </div>
    </div>

    <footer>
        &copy; {{ date('Y') }} Aplikasi Kamu. All rights reserved.
    </footer>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
