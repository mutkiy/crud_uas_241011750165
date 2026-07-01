<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS - Edit Data Pemain</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-warning text-dark">
                        <h5 class="mb-0">📝 Form Edit Data Pemain</h5>
                    </div>
                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="/pemain/{{ $pemain->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT') <div class="mb-3">
                                <label for="nama_pemain" class="form-label font-weight-bold">Nama Pemain</label>
                                <input type="text" class="form-control" id="nama_pemain" name="nama_pemain" value="{{ old('nama_pemain', $pemain->nama_pemain) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="cabang_olahraga" class="form-label font-weight-bold">Cabang Olahraga</label>
                                <input type="text" class="form-control" id="cabang_olahraga" name="cabang_olahraga" value="{{ old('cabang_olahraga', $pemain->cabang_olahraga) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="klub" class="form-label font-weight-bold">Klub / Tim</label>
                                <input type="text" class="form-control" id="klub" name="klub" value="{{ old('klub', $pemain->klub) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="usia" class="form-label font-weight-bold">Usia (Tahun)</label>
                                <input type="number" class="form-control" id="usia" name="usia" value="{{ old('usia', $pemain->usia) }}" min="1" required>
                            </div>

                            <div class="mb-4">
                                <label for="gambar" class="form-label font-weight-bold">Foto / Gambar Pemain</label>
                                <div class="mb-2">
                                    <small class="text-muted d-block mb-1">Foto saat ini:</small>
                                    <img src="{{ asset('storage/' . $pemain->gambar) }}" alt="Foto Lama" class="img-thumbnail" style="max-height: 120px;">
                                </div>
                                <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*">
                                <small class="text-muted">Kosongkan jika tidak ingin mengubah foto. Format didukung: JPG, JPEG, PNG. Maksimal 2MB.</small>
                            </div>

                            <div class="d-flex justify-content-between">
                                <a href="/pemain" class="btn btn-secondary">🔙 Kembali</a>
                                <button type="submit" class="btn btn-primary">🔄 Perbarui Data</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>