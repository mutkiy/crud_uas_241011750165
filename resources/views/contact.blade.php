<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Siti Muthmainnah N.</title>
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

        /* CONTACT CARD FORM */
        .contact-card {
            background: white;
            border: 1px solid #e2e8f0;
            border-radius: 24px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.02);
            overflow: hidden;
        }
        .accent-bar {
            height: 6px;
            background: linear-gradient(to right, #10b981, #059669);
        }

        .form-control {
            border-radius: 12px;
            padding: 12px 16px;
            border: 1px solid #e2e8f0;
            font-size: 0.9rem;
        }
        .form-control:focus {
            border-color: #10b981;
            box-shadow: 0 0 0 4px rgba(16, 185, 129, 0.1);
        }

        /* INFO BOX STYLING */
        .info-box {
            background: #f8fafc;
            border-radius: 20px;
            padding: 22px;
            border: 1px solid #e2e8f0;
            display: flex;
            align-items: center;
            gap: 15px;
            transition: all 0.3s ease;
        }
        .info-box:hover {
            border-color: #10b981;
            background: white;
            transform: translateX(5px);
        }
        .info-icon {
            width: 50px;
            height: 50px;
            background: rgba(16, 185, 129, 0.1);
            color: #10b981;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            flex-shrink: 0;
        }

        /* BUTTON SUBMIT */
        .btn-submit {
            background: #1e293b;
            color: white;
            border: none;
            border-radius: 12px;
            padding: 12px 24px;
            font-weight: 600;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            width: 100%;
        }
        .btn-submit:hover {
            background: #10b981;
            box-shadow: 0 8px 20px rgba(16, 185, 129, 0.25);
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
                    <li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link active fw-bold" href="{{ url('/contact') }}">Contact</a></li>
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
            <h2 class="fw-bold mb-1"><i class="fa-solid fa-envelope-open-text text-success me-2"></i>Hubungi Saya</h2>
            <p class="text-white-50 small mb-0">Silakan tinggalkan pesan atau hubungi melalui saluran informasi di bawah ini</p>
        </div>
    </header>

    <!-- KONTEN UTAMA CONTACT -->
    <main class="container mb-5">
        <div class="row g-4">
            
            <!-- SEKSI FORMULIR (SISI KIRI) -->
            <div class="col-lg-7">
                <div class="card contact-card border-0">
                    <div class="accent-bar"></div>
                    <div class="card-body p-4 p-md-5">
                        <h4 class="fw-bold text-dark mb-4">Kirim Pesan</h4>
                        
                        <form action="#" method="POST" onsubmit="event.preventDefault(); alert('Pesan simulasi berhasil dikirim!');">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label small fw-semibold text-secondary">Nama Lengkap</label>
                                    <input type="text" class="form-control" placeholder="Masukkan nama Anda" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-semibold text-secondary">Alamat Email</label>
                                    <input type="email" class="form-control" placeholder="nama@email.com" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label small fw-semibold text-secondary">Subjek / Perihal</label>
                                    <input type="text" class="form-control" placeholder="Judul keperluan Anda" required>
                                </div>
                                <div class="col-12">
                                    <label class="form-label small fw-semibold text-secondary">Isi Pesan</label>
                                    <textarea class="form-control" rows="5" placeholder="Tuliskan detail pesan Anda di sini..." required></textarea>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn-submit">
                                        <i class="fa-solid fa-paper-plane me-2"></i>Kirim Pesan Sekarang
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

            <!-- SEKSI DETAIL INFO (SISI KANAN) -->
            <div class="col-lg-5">
                <div class="d-flex flex-column gap-3 h-100">
                    
                    <!-- INFO KOTAK 1: EMAIL -->
                    <div class="info-box">
                        <div class="info-icon"><i class="fa-solid fa-envelope"></i></div>
                        <div>
                            <span class="d-block text-muted small">Surel Elektronik</span>
                            <span class="fw-bold text-dark text-break">mut.kiy27@gmail.com</span>
                        </div>
                    </div>

                    <!-- INFO KOTAK 2: LOKASI -->
                    <div class="info-box">
                        <div class="info-icon"><i class="fa-solid fa-location-dot text-danger"></i></div>
                        <div>
                            <span class="d-block text-muted small">Lokasi Utama</span>
                            <span class="fw-bold text-dark">Tangerang, Banten, Indonesia</span>
                        </div>
                    </div>

                    <!-- INFO KOTAK 3: JAM RESPONS -->
                    <div class="info-box">
                        <div class="info-icon"><i class="fa-solid fa-clock text-warning"></i></div>
                        <div>
                            <span class="d-block text-muted small">Waktu Operasional Respons</span>
                            <span class="fw-bold text-dark">Senin - Minggu (Fleksibel)</span>
                        </div>
                    </div>

                    <!-- BANNER KECIL MOTIVASI SQUASH -->
                    <div class="info-box flex-grow-1 align-items-start bg-dark text-white border-0 p-4" style="border-radius: 20px;">
                        <div>
                            <h5 class="fw-bold text-success mb-2"><i class="fa-solid fa-bolt me-2"></i>Gaya Komunikasi Sigap</h5>
                            <p class="text-white-50 small mb-0" style="line-height: 1.6;">
                                Layaknya ritme olahraga yang dinamis dan taktis, saya selalu mengutamakan komunikasi yang cepat, solutif, dan efisien untuk mencapai mufakat dalam setiap kolaborasi tim.
                            </p>
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