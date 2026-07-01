<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS Sistem Informasi - Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f4f7f6;
            color: #2d3748;
        }
        .navbar-custom {
            background-color: #0b4742; 
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .btn-menu-porto {
            background-color: #ffffff;
            color: #0b4742;
            border: 1px solid #e2e8f0;
            font-weight: 500;
            text-align: left;
            padding: 12px 16px;
            margin-bottom: 10px;
            display: block;
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.3s;
        }
        .btn-menu-porto:hover {
            background-color: #f0fdf4;
            color: #0b4742;
            border-color: #10b981;
        }
        .btn-tambah-porto {
            background-color: #10b981;
            color: white;
            font-weight: 600;
            text-align: left;
            padding: 12px 16px;
            margin-bottom: 10px;
            display: block;
            text-decoration: none;
            border-radius: 8px;
            border: none;
        }
        .btn-tambah-porto:hover {
            background-color: #059669;
            color: white;
        }
        .btn-kelola-porto {
            background-color: #0f766e;
            color: white;
            font-weight: 500;
            text-align: left;
            padding: 12px 16px;
            margin-bottom: 20px;
            display: block;
            text-decoration: none;
            border-radius: 8px;
            border: none;
        }
        .btn-kelola-porto:hover {
            background-color: #115e59;
            color: white;
        }
        .box-total-porto {
            background-color: #0b4742;
            color: white;
            border-radius: 12px;
            padding: 20px;
        }
        .table thead th {
            background-color: #0b4742 !important;
            color: white !important;
            font-weight: 600;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom py-3 mb-4">
        <div class="container-fluid px-4">
            <a class="navbar-brand fw-bold fs-5" href="#">UAS SISTEM INFORMASI</a>
            <div class="d-flex align-items-center ms-auto">
                <span class="text-white-50 me-3">Selamat Datang, <strong class="text-white">Siti Muthmainnah</strong></span>
                <form action="/logout" method="POST" class="m-0">
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm px-3 rounded-pill fw-medium">Keluar</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid px-4">
        <div class="row">
            
            <div class="col-md-3 mb-4">
                <div class="card p-3 shadow-sm border-0 rounded-4">
                    <small class="text-muted text-uppercase fw-bold mb-3 d-block" style="font-size: 0.75rem;">Menu Utama</small>
                    
                    <a href="/" class="btn btn-menu-porto">🏠 Lihat Landing Page</a>
                    <a href="/jadwal/create" class="btn btn-tambah-porto">➕ Tambah Jadwal Pertandingan</a>
                    <a href="/jadwal" class="btn btn-kelola-porto">📂 Kelola CRUD Selengkapnya</a>

                    <div class="box-total-porto shadow-sm">
                        <small class="text-white-50 text-uppercase fw-bold" style="font-size: 0.7rem;">TOTAL JADWAL</small>
                        <h2 class="fw-bold m-0 mt-1">{{ $totalJadwal ?? 4 }} Data</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="card p-4 shadow-sm border-0 rounded-4">
                    
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="fw-bold m-0" style="color: #0b4742;">
                            <span class="me-2">📊</span>Data Entri Jadwal Pertandingan
                        </h4>
                        <div class="d-flex gap-2">
                            <button onclick="window.print();" class="btn btn-danger btn-sm px-3 rounded-3 fw-medium">📄 Export PDF / Cetak</button>
                            <button class="btn btn-secondary btn-sm px-3 rounded-3 fw-medium">NIM: 241011750165</button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered align-middle m-0">
                            <thead>
                                <tr>
                                    <th>ID Event</th>
                                    <th>Gambar</th>
                                    <th>Nama Event</th>
                                    <th>Tanggal</th>
                                    <th>Tempat</th>
                                    <th>Penanggung Jawab</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($jadwals ?? [] as $jadwal)
                                <tr>
                                    <td class="fw-bold text-success">{{ $jadwal->id_event }}</td>
                                    <td class="text-center">
                                        @if(!empty($jadwal->gambar))
                                            <img src="{{ asset('storage/' . $jadwal->gambar) }}" width="60" class="rounded border">
                                        @else
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/1/15/Badminton_logo.png" width="60" class="rounded border">
                                        @endif
                                    </td>
                                    <td>
                                        <div class="fw-bold">{{ $jadwal->nama_event }}</div>
                                        <small class="text-muted">{{ $jadwal->detail_match }}</small>
                                    </td>
                                    <td>{{ $jadwal->tanggal }}</td>
                                    <td>{{ $jadwal->tempat }}</td>
                                    <td>
                                        <small>👤 {{ $jadwal->pj ?? ($jadwal->penanggung_jawab ?? 'Referee Komite') }}</small>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center py-4 text-muted">Belum ada data jadwal di database.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>