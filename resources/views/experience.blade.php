<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experience - Siti Muthmainnah N.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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

        /* STYLING TIMELINE */
        .timeline-container {
            position: relative;
            padding: 20px 0;
        }
        .timeline-container::after {
            content: '';
            position: absolute;
            width: 4px;
            background: linear-gradient(to bottom, #10b981, #059669);
            top: 0; bottom: 0; left: 50%;
            margin-left: -2px;
            border-radius: 10px;
        }

        .timeline-item {
            padding: 10px 40px;
            position: relative;
            background-color: inherit;
            width: 50%;
        }

        .timeline-item::after {
            content: '';
            position: absolute;
            width: 20px;
            height: 20px;
            right: -10px;
            background-color: white;
            border: 4px solid #10b981;
            top: 15px;
            border-radius: 50%;
            z-index: 1;
            box-shadow: 0 0 8px rgba(16, 185, 129, 0.5);
        }

        .left { left: 0; }
        .right { left: 50%; }

        .right::after { left: -10px; }

        .timeline-card {
            padding: 25px;
            background-color: white;
            position: relative;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.04);
            border: 1px solid #e2e8f0;
            transition: all 0.3s ease;
        }
        .timeline-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(16, 185, 129, 0.1);
            border-color: #10b981;
        }

        .timeline-icon {
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

        .job-title {
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 2px;
        }
        .company-name {
            font-weight: 600;
            color: #10b981;
            font-size: 0.95rem;
        }
        .job-date {
            font-size: 0.8rem;
            color: #64748b;
            font-weight: 500;
            background: #f1f5f9;
            padding: 4px 12px;
            border-radius: 50px;
            display: inline-block;
            margin-bottom: 15px;
        }

        .task-list {
            padding-left: 0;
            list-style: none;
        }
        .task-list li {
            position: relative;
            padding-left: 25px;
            margin-bottom: 8px;
            font-size: 0.9rem;
            color: #475569;
            line-height: 1.5;
        }
        
        /* FIX: Penyesuaian font-family agar ikon centang FontAwesome v6 muncul */
        .task-list li::before {
            content: "\f00c";
            font-family: "Font Awesome 6 Free";
            font-weight: 900;
            position: absolute;
            left: 0;
            color: #10b981;
            font-size: 0.85rem;
            top: 3px;
        }

        /* RESPONSIVE FOR MOBILE / TABLET */
        @media screen and (max-width: 768px) {
            .timeline-container::after { left: 31px; }
            .timeline-item { width: 100%; padding-left: 70px; padding-right: 25px; }
            .timeline-item::after { left: 21px; right: auto; }
            .left, .right { left: 0; }
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-custom sticky-top py-3">
        <div class="container">
            <a class="navbar-brand fw-bold d-flex align-items-center text-dark" href="{{ url('/') }}">
                <span class="text-success me-2"><i class="fa-solid fa-dumbbell"></i></span>SMN.
            </a>
            
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto text-center my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link active fw-bold" href="{{ url('/experience') }}">Experience</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/project') }}">Project</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                </ul>
                
                <div class="d-flex justify-content-center">
                    <a href="{{ url('/login') }}" class="btn px-4 py-2 rounded-pill fw-medium d-flex align-items-center gap-2 shadow-sm" style="background-color: #f1f5f9; color: #334155; border: 1px solid #e2e8f0; font-size: 0.9rem;">
                        <i class="fa-regular fa-user text-secondary"></i> Area Admin
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <header class="page-header text-center mb-5">
        <div class="container">
            <h2 class="fw-bold mb-1"><i class="fa-solid fa-briefcase text-success me-2"></i>Pengalaman Kerja</h2>
            <p class="text-white-50 small mb-0">Rekam jejak kontribusi, dedikasi, dan pengembangan keahlian profesional</p>
        </div>
    </header>

    <div class="container mb-5">
        <div class="timeline-container">

            <div class="timeline-item left">
                <div class="timeline-card">
                    <div class="timeline-icon"><i class="fa-solid fa-store"></i></div>
                    <h5 class="job-title">Staf Operasional & Pelayanan</h5>
                    <span class="company-name">Kantin Sekolah Menengah Atas (SMA)</span><br>
                    <span class="job-date">Januari 2022 – Sekarang</span>
                    <ul class="task-list">
                        <li><strong>Manajemen Inventaris & Penjualan:</strong> Mengelola operasional harian gerai secara mandiri, termasuk perencanaan stok, penyediaan, dan komersialisasi produk minuman es serta hidangan gorengan.</li>
                        <li><strong>Pelayanan Pelanggan (Customer Service):</strong> Melayani ratusan siswa dan staf sekolah harian dengan standar pelayanan ramah, sigap, dan higienis.</li>
                        <li><strong>Manajemen Finansial Mikro:</strong> Menangani pencatatan arus kas masuk-keluar, pengelolaan modal berkala, serta berkolaborasi dengan pihak internal (Teteh) untuk pengoptimalan keuntungan.</li>
                    </ul>
                </div>
            </div>

            <div class="timeline-item right">
                <div class="timeline-card">
                    <div class="timeline-icon"><i class="fa-solid fa-mug-hot"></i></div>
                    <h5 class="job-title">Live Streaming Host & Barista</h5>
                    <span class="company-name">Professional Skill Development (Training)</span><br>
                    <span class="job-date">Maret 2026 – Maret 2026</span>
                    <ul class="task-list">
                        <li><strong>Content Broadcast & Engagement:</strong> Menjalani pelatihan intensif live streaming host, mengonsep skrip interaktif, dan melatih komunikasi publik guna meningkatkan retensi penonton.</li>
                        <li><strong> Barista Artistry:</strong> Menguasai teknik peracikan variasi minuman teh berbasis standar industri, menjaga higienitas area bar, dan merekomendasikan produk ke konsumen.</li>
                        <li><strong>Adaptabilitas Platform Digital:</strong> Mempelajari algoritma interaksi pemirsa secara langsung di platform sosial e-commerce untuk optimasi pemasaran digital.</li>
                    </ul>
                </div>
            </div>

            <div class="timeline-item left">
                <div class="timeline-card">
                    <div class="timeline-icon"><i class="fa-solid fa-building"></i></div>
                    <h5 class="job-title">Magang Profesional (Internship)</h5>
                    <span class="company-name">PT. Citra Bina Maju Jaya</span><br>
                    <span class="job-date">Maret 2025 – Juni 2025 (3 Bulan)</span>
                    <ul class="task-list">
                        <li><strong>Dukungan Administrasi & Operasional:</strong> Berkontribusi aktif dalam membantu efisiensi administrasi internal divisi serta mendukung aktivitas operasional korporat harian.</li>
                        <li><strong>Kolaborasi Lintas Fungsi:</strong> Bekerja sama dalam kelompok kerja guna merampungkan target pemenuhan laporan berkala korporat dengan tingkat presisi tinggi.</li>
                        <li><strong>Pemecahan Masalah (Problem Solving):</strong> Beradaptasi cepat dengan kultur kerja profesional dan tanggap menyelesaikan penugasan dinamis dari supervisor magang.</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>