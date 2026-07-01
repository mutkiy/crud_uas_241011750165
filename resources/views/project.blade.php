<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - Siti Muthmainnah N.</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc;
            color: #1e293b;
        }

        /* NAVBAR STYLING (Diselaraskan dengan Landing Page) */
        .navbar-custom {
            background-color: rgba(255, 255, 255, 0.95);
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
            color: #10b981;
            transform: translateY(-1px);
        }

        /* HEADER SECTION */
        .page-header {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            color: white;
            padding: 60px 0;
            border-radius: 0 0 40px 40px;
            position: relative;
        }
        .page-header::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background-image: linear-gradient(rgba(16, 185, 129, 0.05) 1px, transparent 1px),
                              linear-gradient(90deg, rgba(16, 185, 129, 0.05) 1px, transparent 1px);
            background-size: 30px 30px;
        }

        /* PROJECT CARDS STYLING */
        .project-card {
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.03);
            transition: all 0.3s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        .project-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(16, 185, 129, 0.1);
            border-color: #10b981;
        }

        .project-img-wrapper {
            position: relative;
            background: #f1f5f9;
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            border-bottom: 1px solid #e2e8f0;
        }
        .project-icon-placeholder {
            font-size: 4rem;
            color: #10b981;
            opacity: 0.8;
            transition: transform 0.3s ease;
        }
        .project-card:hover .project-icon-placeholder {
            transform: scale(1.1) rotate(5deg);
        }

        .project-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(15, 23, 42, 0.85);
            color: white;
            backdrop-filter: blur(5px);
            padding: 5px 14px;
            font-size: 0.75rem;
            font-weight: 600;
            border-radius: 50px;
            border: 1px solid rgba(255,255,255,0.1);
        }

        .project-body {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        .project-title {
            font-weight: 700;
            color: #1e293b;
            font-size: 1.2rem;
            margin-bottom: 10px;
        }
        .project-desc {
            font-size: 0.9rem;
            color: #64748b;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        /* TECH STACKS BADGES */
        .tech-stack {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
            margin-top: auto;
            margin-bottom: 20px;
        }
        .tech-badge {
            background: #f1f5f9;
            color: #475569;
            font-size: 0.75rem;
            font-weight: 600;
            padding: 4px 10px;
            border-radius: 6px;
        }

        /* BUTTON ACTION */
        .btn-view-project {
            background: #1e293b;
            color: white;
            border: none;
            border-radius: 12px;
            padding: 10px;
            font-size: 0.9rem;
            font-weight: 600;
            transition: all 0.3s ease;
            text-align: center;
            text-decoration: none;
            display: block;
        }
        .btn-view-project:hover {
            background: #10b981;
            color: white;
            box-shadow: 0 5px 15px rgba(16, 185, 129, 0.3);
        }
    </style>
</head>
<body>

    <!-- NAVBAR UTAMA -->
    <nav class="navbar navbar-expand-lg navbar-custom sticky-top py-3">
        <div class="container">
            <!-- Logo Sisi Kiri -->
            <a class="navbar-brand fw-bold d-flex align-items-center text-dark" href="{{ url('/') }}">
                <span class="text-success me-2"><i class="fa-solid fa-dumbbell"></i></span>SMN.
            </a>
            
            <!-- Tombol Hamburger Menu Responsif Mobile -->
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Menu Navigasi Tengah & Kanan -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto text-center my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/experience') }}">Experience</a></li>
                    <li class="nav-item"><a class="nav-link active fw-bold" href="{{ url('/project') }}">Project</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                    <!-- FIX: Menambahkan menu Contact -->
                    <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                </ul>
                
                <!-- FIX: Menambahkan tombol Area Admin di Pojok Kanan -->
                <div class="d-flex justify-content-center">
                    <a href="{{ url('/login') }}" class="btn px-4 py-2 rounded-pill fw-medium d-flex align-items-center gap-2 shadow-sm" style="background-color: #f1f5f9; color: #334155; border: 1px solid #e2e8f0; font-size: 0.9rem;">
                        <i class="fa-regular fa-user text-secondary"></i> Area Admin
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- HEADER -->
    <header class="page-header text-center mb-5">
        <div class="container">
            <h2 class="fw-bold mb-1"><i class="fa-solid fa-folder-open text-success me-2"></i>Portofolio Proyek</h2>
            <p class="text-white-50 small mb-0">Koleksi pengembangan sistem aplikasi, rancangan manajemen strategi, dan karya digital</p>
        </div>
    </header>

    <!-- KONTEN KARTU PROYEK -->
    <div class="container mb-5">
        <div class="row g-4">

            <!-- PROYEK 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="project-card">
                    <div class="project-img-wrapper">
                        <span class="project-badge">UAS Rekayasa Web</span>
                        <div class="project-icon-placeholder"><i class="fa-solid fa-circle-trophy text-success"></i></div>
                    </div>
                    <div class="project-body">
                        <h5 class="project-title">Sistem Entri Jadwal Pertandingan</h5>
                        <p class="project-desc">Aplikasi backend berbasis web untuk mengelola entri data jadwal pertandingan olahraga secara dinamis. Mendukung penuh operasi CRUD, manajemen gambar, otentikasi aman, serta fitur ekspor laporan ke format PDF.</p>
                        <div class="tech-stack">
                            <span class="tech-badge">Laravel 13</span>
                            <span class="tech-badge">PHP 8.5</span>
                            <span class="tech-badge">MySQL (Termux)</span>
                            <span class="tech-badge">Bootstrap 5</span>
                        </div>
                        <a href="{{ url('/login') }}" class="btn-view-project"><i class="fa-solid fa-arrow-up-right-from-square me-2"></i> Buka Aplikasi / Dashboard</a>
                    </div>
                </div>
            </div>

            <!-- PROYEK 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="project-card">
                    <div class="project-img-wrapper">
                        <span class="project-badge">Studi Kasus Manajemen</span>
                        <div class="project-icon-placeholder"><i class="fa-solid fa-plane-up text-primary"></i></div>
                    </div>
                    <div class="project-body">
                        <h5 class="project-title">5-Year Strategic Service Roadmap</h5>
                        <p class="project-desc">Penyusunan peta jalan strategis jangka panjang selama 5 tahun untuk peningkatan layanan maskapai komersial nasional Garuda Indonesia, berfokus pada efisiensi operasional dan optimalisasi kepuasan pelanggan.</p>
                        <div class="tech-stack">
                            <span class="tech-badge">Strategic Analysis</span>
                            <span class="tech-badge">Roadmapping</span>
                            <span class="tech-badge">Case Study</span>
                        </div>
                        <a href="#" class="btn-view-project"><i class="fa-solid fa-file-lines me-2"></i> Lihat Dokumen Ringkasan</a>
                    </div>
                </div>
            </div>

            <!-- PROYEK 3 (FIXED HTML STRUCTURE) -->
            <div class="col-md-6 col-lg-4">
                <div class="project-card">
                    <div class="project-img-wrapper">
                        <span class="project-badge">Multimedia Artwork</span>
                        <div class="project-icon-placeholder"><i class="fa-solid fa-palette text-warning"></i></div>
                    </div>
                    <div class="project-body">
                        <h5 class="project-title">Interactive Digital Asset Design</h5>
                        <p class="project-desc">Rancangan aset digital grafis interaktif dan multimedia komersial. Berfokus pada pembuatan elemen visual yang estetis, penataan layout UI minimalis, dan pengembangan kreasi branding berbasis vektor.</p>
                        <div class="tech-stack">
                            <span class="tech-badge">Vector Ink</span>
                            <span class="tech-badge">Krita Art</span>
                            <span class="tech-badge">Graphic UI</span>
                        </div>
                        <a href="#" class="btn-view-project"><i class="fa-solid fa-images me-2"></i> Jelajahi Galeri Desain</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>