<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me - Siti Muthmainnah N.</title>
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

        /* NAVBAR STYLING (Diselaraskan dengan halaman lainnya) */
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

        /* ABOUT CONTENT CARD */
        .about-card {
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 24px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.02);
            overflow: hidden;
            margin-bottom: 30px;
        }
        .accent-bar {
            height: 6px;
            background: linear-gradient(to right, #10b981, #059669);
        }

        /* CORE VALUES CARD */
        .value-box {
            background: #f8fafc;
            border-radius: 16px;
            padding: 20px;
            border: 1px solid #e2e8f0;
            transition: all 0.3s ease;
            height: 100%;
        }
        .value-box:hover {
            border-color: #10b981;
            background: white;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(16, 185, 129, 0.05);
        }
        .value-icon {
            width: 45px;
            height: 45px;
            background: rgba(16, 185, 129, 0.1);
            color: #10b981;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            margin-bottom: 15px;
        }

        /* SKILLS STYLING */
        .interest-badge {
            background: #1e293b;
            color: white;
            padding: 8px 16px;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 500;
            display: inline-block;
            margin-bottom: 10px;
            margin-right: 5px;
            border: 1px solid rgba(255,255,255,0.1);
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
            
            <!-- SINKRONISASI: Tombol Hamburger Menu untuk Mobile -->
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- Menu Navigasi Tengah & Kanan -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto text-center my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/experience') }}">Experience</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/project') }}">Project</a></li>
                    <li class="nav-item"><a class="nav-link active fw-bold" href="{{ url('/about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                </ul>
                
                <!-- SINKRONISASI: Tombol Area Admin di Pojok Kanan Navbar -->
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
            <h2 class="fw-bold mb-1"><i class="fa-solid fa-user-astronaut text-success me-2"></i>Tentang Saya</h2>
            <p class="text-white-50 small mb-0">Mengenal lebih dekat profil, visi, dan nilai-nilai fundamental pribadi</p>
        </div>
    </header>

    <!-- KONTEN UTAMA -->
    <main class="container mb-5">
        <div class="row g-4">
            
            <!-- KOLOM KIRI: NARASI PROFIL -->
            <div class="col-lg-7">
                <div class="card about-card border-0">
                    <div class="accent-bar"></div>
                    <div class="card-body p-4 p-md-5">
                        <h4 class="fw-bold text-dark mb-3">Hi, Saya Siti Muthmainnah Nurdzakiyyah</h4>
                        <p class="text-secondary leading-relaxed mb-4">
                            Saya adalah seorang mahasiswi program studi <strong>Sistem Informasi di Universitas Pamulang (UNPAM)</strong>. Memiliki latar belakang pendidikan Multimedia sewaktu SMK, saya menyukai kolaborasi antara estetika desain visual yang nyaman dipandang (cozy minimalist) dengan logika pemrograman backend (web rekayasa).
                        </p>
                        <p class="text-secondary leading-relaxed mb-4">
                            Melalui proyek pengerjaan aplikasi manajemen olahraga ini, saya mendedikasikan ketelitian teknis untuk membangun solusi sistem yang andal dan terstruktur. Bagi saya, dunia akademis maupun pekerjaan harian menuntut komitmen yang sama: memberikan pelayanan terbaik secara konsisten, sigap menghadapi tantangan eror, dan terus berkembang melampaui batasan diri.
                        </p>

                        <h5 class="fw-bold text-dark mt-4 mb-3"><i class="fa-solid fa-heart text-danger me-2"></i>Fokus & Minat Karir</h5>
                        <div class="pt-1">
                            <span class="interest-badge"><i class="fa-brands fa-laravel me-1 text-danger"></i> Laravel Backend</span>
                            <span class="interest-badge"><i class="fa-solid fa-database me-1 text-info"></i> Database Architect</span>
                            <span class="interest-badge"><i class="fa-solid fa-wand-magic-sparkles me-1 text-warning"></i> UI/UX Cozy Design</span>
                            <span class="interest-badge"><i class="fa-solid fa-chart-line me-1 text-success"></i> Strategic Management</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- KOLOM KANAN: NILAI FUNDAMENTAL -->
            <div class="col-lg-5">
                <div class="row g-3 h-100">
                    
                    <div class="col-12">
                        <div class="value-box">
                            <div class="value-icon"><i class="fa-solid fa-shield-halved"></i></div>
                            <h6 class="fw-bold text-dark mb-2">Integritas & Dedikasi Tinggi</h6>
                            <p class="text-secondary small mb-0">Selalu berkomitmen menyelesaikan setiap penugasan akademis dan tanggung jawab kerja secara jujur, transparan, serta mengutamakan ketelitian penuh.</p>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="value-box">
                            <div class="value-icon"><i class="fa-solid fa-fire-flame-curved"></i></div>
                            <h6 class="fw-bold text-dark mb-2">Kerja Keras & Semangat Berproses</h6>
                            <p class="text-secondary small mb-0">Menyeimbangkan rutinitas kuliah sistem informasi dengan aktivitas harian nyata. Memandang tantangan kodingan eror sebagai ruang belajar untuk naik kelas.</p>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="value-box">
                            <div class="value-icon"><i class="fa-solid fa-users-gear"></i></div>
                            <h6 class="fw-bold text-dark mb-2">Kolaborasi & Kerjasama Tim</h6>
                            <p class="text-secondary small mb-0">Percaya bahwa hasil yang besar lahir dari komunikasi yang selaras, baik dalam kerja kelompok magang industri maupun kolaborasi harian bersama keluarga.</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- BAGIAN BAWAH: KONTAK & MEDIA SOSIAL -->
            <div class="col-12 mt-3">
                <div class="card about-card border-0">
                    <div class="card-body p-4 p-md-5">
                        <h4 class="fw-bold text-dark text-center mb-4">
                            <span class="text-success"><i class="fa-solid fa-address-book me-2"></i></span>Mari Terhubung
                        </h4>
                        <div class="row g-3 justify-content-center text-center">
                            
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <a href="mailto:siti.muthmainnah@example.com" class="text-decoration-none">
                                    <div class="value-box d-flex flex-column align-items-center justify-content-center p-3">
                                        <div class="value-icon m-0 mb-2"><i class="fa-solid fa-envelope"></i></div>
                                        <span class="fw-bold text-dark small">Email Resmi</span>
                                        <span class="text-muted text-truncate w-100 x-small mt-1" style="font-size: 0.75rem;">Kirim Pesan</span>
                                    </div>
                                </a>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <a href="https://linkedin.com" target="_blank" class="text-decoration-none">
                                    <div class="value-box d-flex flex-column align-items-center justify-content-center p-3">
                                        <div class="value-icon m-0 mb-2 text-primary" style="background: rgba(13, 110, 253, 0.1);"><i class="fa-brands fa-linkedin"></i></div>
                                        <span class="fw-bold text-dark small">LinkedIn</span>
                                        <span class="text-muted x-small mt-1" style="font-size: 0.75rem;">Profil Profesional</span>
                                    </div>
                                </a>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <a href="https://github.com" target="_blank" class="text-decoration-none">
                                    <div class="value-box d-flex flex-column align-items-center justify-content-center p-3">
                                        <div class="value-icon m-0 mb-2 text-dark" style="background: rgba(30, 41, 59, 0.1);"><i class="fa-brands fa-github"></i></div>
                                        <span class="fw-bold text-dark small">GitHub</span>
                                        <span class="text-muted x-small mt-1" style="font-size: 0.75rem;">Repositori Kode</span>
                                    </div>
                                </a>
                            </div>

                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <a href="https://wa.me/#" target="_blank" class="text-decoration-none">
                                    <div class="value-box d-flex flex-column align-items-center justify-content-center p-3">
                                        <div class="value-icon m-0 mb-2 text-success" style="background: rgba(25, 135, 84, 0.1);"><i class="fa-brands fa-whatsapp"></i></div>
                                        <span class="fw-bold text-dark small">WhatsApp</span>
                                        <span class="text-muted x-small mt-1" style="font-size: 0.75rem;">Respon Cepat</span>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>