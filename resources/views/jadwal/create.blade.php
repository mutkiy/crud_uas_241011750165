<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Jadwal Pertandingan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5" style="max-width: 600px;">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">➕ Tambah Jadwal Pertandingan</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('jadwal.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">ID Event/Kode Event</label>
                        <input type="text" name="id_event" class="form-control" placeholder="Contoh:101 atau EVT01" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Event</label>
                        <input type="text" name="nama_event" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Pertandingan</label>
                        <input type="date" name="tanggal" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tempat / Stadion</label>
                        <input type="text" name="tempat" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Penanggung Jawab</label>
                        <input type="text" name="penanggung_jawab" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Gambar Banner/Poster</label>
                        <input type="file" name="gambar" class="form-control">
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('jadwal.index') }}" class="btn btn-secondary">Kembali</a>
                        <button type="submit" class="btn btn-success">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>