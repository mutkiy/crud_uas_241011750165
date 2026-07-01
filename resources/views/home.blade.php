<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio - Siti Muthmainnah Nurdzakiyyah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc;
            color: #1e293b;
            overflow-x: hidden;
        }

        /* NAVBAR STYLING */
        .navbar-custom {
            background-color: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid #e2e8f0;
        }
        .navbar-nav .nav-link {
            color: #475569;
            font-weight: 500;
            padding: 0.5rem 1.2rem !important;
            transition: all 0.3s ease;
        }
        .navbar-nav .nav-link:hover, .navbar-nav .nav-link.active {
            color: #10b981; /* Tema Hijau Sporty */
            transform: translateY(-1px);
        }

        /* HERO SECTION SPORTY-COZY */
        .hero-section {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            color: white;
            padding: 100px 0 80px 0;
            border-radius: 0 0 50px 50px;
            position: relative;
            overflow: hidden;
        }
        /* Background pattern ala lapangan / garis olahraga samar */
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background-image: linear-gradient(rgba(16, 185, 129, 0.1) 1px, transparent 1px),
                              linear-gradient(90deg, rgba(16, 185, 129, 0.1) 1px, transparent 1px);
            background-size: 40px 40px;
            opacity: 0.5;
        }

        /* BINGKAI FOTO PROFIL ESTATIK */
        .profile-container {
            position: relative;
            width: 200px;
            height: 200px;
            margin: 0 auto;
        }
        .profile-frame {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 6px solid #10b981; /* Ring hijau emerald sporty */
            padding: 6px;
            background-color: rgba(255, 255, 255, 0.1);
            box-shadow: 0 10px 25px rgba(16, 185, 129, 0.3);
            transition: transform 0.5s ease;
            object-fit: cover;
        }
        .profile-container:hover .profile-frame {
            transform: rotate(5deg) scale(1.03);
        }
        /* Badge status online/aktif di pojok foto */
        .status-badge {
            position: absolute;
            bottom: 10px;
            right: 15px;
            background-color: #10b981;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            border: 4px solid #0f172a;
            box-shadow: 0 0 10px #10b981;
        }

        /* CARD IDENTITAS MAHASISWA */
        .identity-card {
            background: white;
            border: none;
            border-radius: 24px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.05);
            margin-top: -40px;
            position: relative;
            z-index: 10;
            transition: transform 0.3s ease;
        }
        .identity-card:hover {
            transform: translateY(-5px);
        }
        .card-header-sporty {
            background: linear-gradient(135deg, #10b981, #059669);
            color: white;
            border-radius: 24px 24px 0 0 !important;
            padding: 1.2rem 2rem;
            font-weight: 600;
        }

        /* DETAIL TABEL IDENTITAS */
        .info-table td {
            padding: 1rem 0.5rem;
            border-bottom: 1px dashed #e2e8f0;
        }
        .info-label {
            font-weight: 600;
            color: #64748b;
            width: 35%;
        }
        .info-value {
            color: #1e293b;
            font-weight: 500;
        }

        /* BUTTON ACTION */
        .btn-sporty {
            background: linear-gradient(135deg, #10b981, #059669);
            color: white;
            border: none;
            border-radius: 50px;
            padding: 0.75rem 2rem;
            font-weight: 600;
            box-shadow: 0 5px 15px rgba(16, 185, 129, 0.2);
            transition: all 0.3s ease;
        }
        .btn-sporty:hover {
            background: linear-gradient(135deg, #059669, #047857);
            color: white;
            box-shadow: 0 8px 20px rgba(16, 185, 129, 0.3);
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-custom sticky-top py-3">
        <div class="container">
            <a class="navbar-brand fw-bold text-dark" href="#">
                <span class="text-success"><i class="fa-solid fa-dumbbell me-2"></i></span>SMN.
            </a>
            <button class="navbar-expand-lg navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-collapse="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-2">
                    <li class="nav-item"><a class="nav-link active" href="/"><i class="fa-solid fa-house me-1"></i> Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link" href="/project">Project</a></li>
                    <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                    <li class="nav-item ms-lg-3">
                        <a href="/login" class="btn btn-outline-dark btn-sm rounded-pill px-3 fw-bold py-2">
                            <i class="fa-solid fa-user-shield me-1"></i> Area Admin
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero-section text-center">
        <div class="container">
            <div class="profile-container mb-4">
                <img src="{{ asset('images/foto-siti.jpg') }}" onerror="this.src='https://ui-avatars.com/api/?name=Siti+Muthmainnah&background=10b981&color=fff&size=200'" class="profile-frame" alt="Siti Muthmainnah N.">
                <div class="status-badge"></div>
            </div>

            <h1 class="fw-bold tracking-tight mb-2">Siti Muthmainnah Nurdzakiyyah</h1>
            <p class="text-success fw-semibold mb-4 tracking-wide text-uppercase small">
                <i class="fa-solid fa-code me-1"></i> Undergraduate Information Systems Student
            </p>
        </div>
    </header>

    <main class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                
                <div class="card identity-card p-0">
                    <div class="card-header card-header-sporty d-flex justify-content-between align-items-center">
                        <span class="mb-0 fs-5"><i class="fa-solid fa-id-card me-2"></i> Identitas Mahasiswa</span>
                        <i class="fa-solid fa-star text-warning animate-pulse"></i>
                    </div>
                    <div class="card-body p-4 p-md-5">
                        <div class="table-responsive">
                            <table class="table info-table table-borderless m-0">
                                <tbody>
                                    <tr>
                                        <td class="info-label">NIM</td>
                                        <td class="info-value">: 241011750165</td>
                                    </tr>
                                    <tr>
                                        <td class="info-label">Program Studi</td>
                                        <td class="info-value">: Sistem Informasi (S1)</td>
                                    </tr>
                                    <tr>
                                        <td class="info-label">Universitas</td>
                                        <td class="info-value">: Universitas Pamulang (UNPAM)</td>
                                    </tr>
                                    <tr>
                                        <td class="info-label">Mata Kuliah</td>
                                        <td class="info-value">: Rekayasa Web </td>
                                    </tr>
                                    <tr>
                                        <td class="info-label">Deskripsi Proyek</td>
                                        <td class="info-value">: Sistem Pengelolaan Data Entri Jadwal Pertandingan </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="text-center mt-4 pt-3">
                            <a href="/login" class="btn btn-sporty">
                                <i class="fa-solid fa-gauge-high me-2"></i> Masuk ke Dashboard Admin
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>