<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS Sistem Informasi - Masuk ke Sistem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: url("{{ asset('images/bg-login.jpg') }}") no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
        }
        
        body::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(11, 71, 66, 0.2);
            z-index: 1;
        }

        .login-container {
            width: 100%;
            max-width: 430px;
            position: relative;
            z-index: 2;
        }

        .card-login {
            border: 1px solid rgba(16, 185, 129, 0.3);
            border-radius: 24px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
            background: rgba(20, 32, 38, 0.85);
            backdrop-filter: blur(10px);
            overflow: hidden;
        }

        .login-header {
            padding: 35px 30px 20px 30px;
            text-align: center;
            color: white;
        }

        .login-icon {
            font-size: 2.3rem;
            background: rgba(16, 185, 129, 0.2);
            width: 65px;
            height: 65px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin-bottom: 12px;
            border: 1px solid rgba(16, 185, 129, 0.4);
        }

        .form-label {
            font-weight: 600;
            color: #a7f3d0;
            font-size: 0.85rem;
            margin-bottom: 6px;
        }
        
        .form-control {
            border-radius: 12px;
            padding: 12px 16px;
            border: 1px solid rgba(255, 255, 255, 0.15);
            font-size: 0.95rem;
            color: #ffffff !important; 
            background-color: rgba(255, 255, 255, 0.07) !important;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .form-control:focus {
            border-color: #10b981;
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.25);
            color: #ffffff !important;
            background-color: rgba(255, 255, 255, 0.12) !important;
        }
        
        .form-control::placeholder {
            color: rgba(255, 255, 255, 0.4) !important;
            font-weight: 400;
        }

        .btn-login {
            background-color: #10b981;
            color: #042f1a;
            font-weight: 700;
            border: none;
            border-radius: 12px;
            padding: 14px;
            width: 100%;
            transition: all 0.3s;
            font-size: 1rem;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
        }

        .btn-login:hover {
            background-color: #34d399;
            color: #042f1a;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(52, 211, 153, 0.4);
        }
        
        .btn-kembali-landing {
            color: rgba(255, 255, 255, 0.5);
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 500;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        .btn-kembali-landing:hover {
            color: #34d399;
        }

        .student-badge {
            background-color: rgba(16, 185, 129, 0.15);
            color: #a7f3d0;
            font-size: 0.8rem;
            font-weight: 600;
            padding: 6px 18px;
            border-radius: 50px;
            display: inline-block;
            border: 1px solid rgba(16, 185, 129, 0.25);
            backdrop-filter: blur(5px);
        }
    </style>
</head>
<body>

    <div class="login-container text-center">
        
        <div class="card card-login text-start">
            
            <div class="login-header">
                <div class="login-icon">🔐</div>
                <h4 class="fw-bold m-0" style="letter-spacing: 0.5px;">Portal Dasbor</h4>
                <p class="text-white text-opacity-50 small m-0 mt-1">Sistem Manajemen Jadwal Olahraga</p>
            </div>

            <div class="card-body p-4 p-md-4 pt-0">
                
                @if($errors->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show p-3 small bg-danger bg-opacity-20 text-white" role="alert" style="border-radius: 12px; border: 1px solid rgba(239, 68, 68, 0.4);">
                        ⚠️ {{ $errors->first('loginError') }}
                        <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form action="{{ url('/login') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="username" class="form-label">Username / Surel</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="Masukkan akun Anda" value="{{ old('username') }}" required autofocus autocomplete="off">
                    </div>

                    <div class="mb-4">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                            <label for="password" class="form-label m-0">Kata Sandi</label>
                            <a href="#" class="text-decoration-none small fw-medium" style="color: #10b981; font-size: 0.8rem;">Lupa Sandi?</a>
                        </div>
                        <input type="password" name="password" id="password" class="form-control" placeholder="••••••••" required>
                    </div>

                    <button type="submit" class="btn btn-login mb-4">➔ Otentikasi Masuk</button>
                    
                    <div class="text-center border-top pt-3 border-secondary border-opacity-25">
                        <a href="{{ url('/') }}" class="btn-kembali-landing">
                            ⬅️ Kembali ke Beranda Utama
                        </a>
                    </div>
                </form>

            </div>
        </div>

        <div class="mt-4">
            <div class="student-badge">
                NIM: 241011750165
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>