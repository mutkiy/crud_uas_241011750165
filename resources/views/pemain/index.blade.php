<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS - Data Jadwal Pertandingan Pemain</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables Bootstrap 5 CSS -->
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">

    <style>
        /* CSS Khusus saat tombol Cetak Laporan PDF diklik */
        @media print {
            /* Sembunyikan semua tombol navigasi dan fitur filter bawaan DataTables */
            .btn, .card-header a, button, 
            th:last-child, td:last-child, 
            .dataTables_length, .dataTables_filter, 
            .dataTables_info, .dataTables_paginate {
                display: none !important;
            }
            
            body {
                background-color: #fff !important;
                color: #000 !important;
                font-size: 12pt;
            }
            .container {
                width: 100% !important;
                max-width: 100% !important;
                margin: 0 !important;
                padding: 0 !important;
            }
            .card {
                border: none !important;
                box-shadow: none !important;
            }
            .card-header {
                background-color: transparent !important;
                color: #000 !important;
                text-align: center;
                border-bottom: 2px solid #000 !important;
                padding-bottom: 10px;
                margin-bottom: 20px;
            }
            .card-header h5 {
                font-size: 18pt !important;
                font-weight: bold !important;
                text-transform: uppercase;
            }
            table {
                border-collapse: collapse !important;
                width: 100% !important;
            }
            table th {
                background-color: #f2f2f2 !important;
                color: #000 !important;
                border: 1px solid #000 !important;
            }
            table td {
                border: 1px solid #000 !important;
            }
        }
    </style>
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Data Jadwal Pertandingan (Daftar Pemain)</h5>
                <div class="d-flex gap-2">
                    <a href="/dashboard" class="btn btn-dark btn-sm fw-bold">🏠 Dashboard</a>
                    <button type="button" onclick="window.print()" class="btn btn-info btn-sm fw-bold text-white">🖨️ Cetak Report PDF</button>
                    <a href="/pemain/create" class="btn btn-light btn-sm fw-bold">➕ Tambah Data Pemain</a>
                </div>
            </div>
            <div class="card-body">
                
                <!-- Notifikasi Sukses -->
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="table-responsive">
                    <table id="tabelPemain" class="table table-striped table-bordered" style="width:100%">
                        <thead class="table-dark">
                            <tr>
                                <th>ID Pemain</th>
                                <th>Gambar</th>
                                <th>Nama Pemain</th>
                                <th>Cabang Olahraga</th>
                                <th>Klub</th>
                                <th>Usia</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pemains as $p)
                            <tr class="align-middle">
                                <td>{{ $p->id }}</td>
                                <td class="text-center">
                                    <img src="{{ asset('storage/' . $p->gambar) }}" alt="Foto {{ $p->nama_pemain }}" class="img-thumbnail" style="max-height: 70px; object-fit: cover;">
                                </td>
                                <td>{{ $p->nama_pemain }}</td>
                                <td><span class="badge bg-secondary">{{ $p->cabang_olahraga }}</span></td>
                                <td>{{ $p->klub }}</td>
                                <td>{{ $p->usia }} Tahun</td>
                                <td class="text-center">
                                    <form action="/pemain/{{ $p->id }}" method="POST" onsubmit="return confirm('Apakah kamu yakin ingin menghapus data pemain ini?')">
                                        <a href="/pemain/{{ $p->id }}/edit" class="btn btn-warning btn-sm">📝 Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">🗑️ Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <!-- JS Library (jQuery, Bootstrap, DataTables) -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    <!-- Inisialisasi DataTables -->
    <script>
        $(document).ready(function() {
            $('#tabelPemain').DataTable({
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.13.6/i18n/id.json"
                }
            });
        });
    </script>
</body>
</html>