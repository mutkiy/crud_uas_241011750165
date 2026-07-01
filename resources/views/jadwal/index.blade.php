<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Data Jadwal Pertandingan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center py-3">
                <h5 class="mb-0 fw-bold">📋 Data Jadwal Pertandingan (NIM Akhiran 5)</h5>
                <div class="d-flex gap-2">
                    <a href="/dashboard" class="btn btn-dark btn-sm fw-bold">🏠 Kembali ke Dashboard</a>
                    <a href="{{ route('jadwal.create') }}" class="btn btn-light btn-sm fw-bold text-primary">+ Tambah Event</a>
                </div>
            </div>
            
            <div class="card-body p-4">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                
                <div class="table-responsive">
                    <table class="table table-bordered table-striped align-middle">
                        <thead class="table-dark text-center">
                            <tr>
                                <th style="width: 10%;">ID Event</th>
                                <th style="width: 15%;">Gambar</th>
                                <th>Nama Event</th>
                                <th>Tanggal</th>
                                <th>Tempat</th>
                                <th>Penanggung Jawab</th>
                                <th style="width: 15%;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($jadwals as $j)
                            <tr>
                                <td class="text-center fw-bold">{{ $j->id_event }}</td>
                                <td class="text-center">
                                    @if($j->gambar)
                                        <img src="{{ asset('storage/' . $j->gambar) }}" width="70" class="rounded shadow-sm">
                                    @else
                                        <span class="text-muted small">No Image</span>
                                    @endif
                                </td>
                                <td class="fw-semibold">{{ $j->nama_event }}</td>
                                <td class="text-center">{{ \Carbon\Carbon::parse($j->tanggal)->format('d-m-Y') }}</td>
                                <td>{{ $j->tempat }}</td>
                                <td>{{ $j->penanggung_jawab }}</td>
                                <td class="text-center">
                                    <div class="d-flex gap-1 justify-content-center">
                                        <a href="{{ route('jadwal.edit', $j->id_event) }}" class="btn btn-warning btn-sm fw-bold">Edit</a>
                                        <form action="{{ route('jadwal.destroy', $j->id_event) }}" method="POST" class="d-inline">
                                            @csrf @method('DELETE')
                                            <button class="btn btn-danger btn-sm fw-bold" onclick="return confirm('Apakah Anda yakin ingin menghapus data jadwal ini?')">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7" class="text-center text-muted py-4">Belum ada data jadwal pertandingan yang diinputkan.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>