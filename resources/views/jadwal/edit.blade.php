<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UAS Sistem Informasi - Edit Jadwal Pertandingan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: url("{{ asset('images/bg-login.jpg') }}") no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px 20px;
            position: relative;
        }
        
        body::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(11, 71, 66, 0.25);
            z-index: 1;
        }

        .edit-container {
            width: 100%;
            max-width: 550px;
            position: relative;
            z-index: 2;
        }

        .card-edit {
            border: 1px solid rgba(16, 185, 129, 0.3);
            border-radius: 24px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.6);
            background: rgba(20, 32, 38, 0.9);
            backdrop-filter: blur(12px);
            overflow: hidden;
        }

        .edit-header {
            padding: 30px 30px 15px 30px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
        }

        .form-label {
            font-weight: 600;
            color: #a7f3d0;
            font-size: 0.85rem;
            margin-bottom: 6px;
        }
        
        .form-control {
            border-radius: 12px;
            padding: 11px 16px;
            border: 1px solid rgba(255, 255, 255, 0.15);
            font-size: 0.95rem;
            color: #ffffff !important; 
            background-color: rgba(255, 255, 255, 0.07) !important;
            font-weight: 500;
            transition: all 0.3s;
        }
        
        .form-control:focus {
            border-color: #10b981;
            box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.25);
            color: #ffffff !important;
            background-color: rgba(255, 255, 255, 0.12) !important;
        }

        .btn-save {
            background-color: #10b981;
            color: #042f1a;
            font-weight: 700;
            border: none;
            border-radius: 12px;
            padding: 12px;
            transition: all 0.3s;
            font-size: 0.95rem;
            letter-spacing: 0.5px;
            box-shadow: 0 4px 15px rgba(16, 185, 129, 0.3);
        }

        .btn-save:hover {
            background-color: #34d399;
            color: #042f1a;
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(52, 211, 153, 0.4);
        }

        .btn-cancel {
            background-color: rgba(255, 255, 255, 0.08);
            color: rgba(255, 255, 255, 0.7);
            font-weight: 600;
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 12px;
            padding: 12px;
            transition: all 0.3s;
            font-size: 0.95rem;
            text-decoration: none;
            text-align: center;
        }

        .btn-cancel:hover {
            background-color: rgba(239, 68, 68, 0.2);
            color: #fca5a5;
            border-color: rgba(239, 68, 68, 0.4);
        }

        .student-badge {
            background-color: rgba(16, 185, 129, 0.15);
            color: #a7f3d0;
            font-size: 0.8rem;
            font-weight: 600;
            padding: 6px 18px;
            border-radius: 50px;
            display: inline-block;
            border: 1px solid rgba(16, 185, 129, 0.25);
        }
    </style>
</head>
<body>

    <div class="edit-container">
        <div class="card card-edit">
            
            <div class="edit-header d-flex align-items-center justify-content-between">
                <div>
                    <h5 class="fw-bold m-0" style="letter-spacing: 0.5px;">📝 Perbarui Jadwal</h5>
                    <p class="text-white text-opacity-50 small m-0 mt-1">Ubah rincian entri pertandingan olahraga</p>
                </div>
                <div class="student-badge">241011750165</div>
            </div>

            <div class="card-body p-4">
                
                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show p-3 small bg-danger bg-opacity-20 text-white border-0 mb-4" role="alert" style="border-radius: 12px;">
                        <ul class="m-0 ps-3">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close btn-close-white shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form action="{{ url('/jadwal/' . $jadwal->id_event) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="nama_event" class="form-label">Nama Event Pertandingan</label>
                        <input type="text" name="nama_event" id="nama_event" class="form-control" value="{{ old('nama_event', $jadwal->nama_event) }}" required autocomplete="off">
                    </div>

                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal Pelaksanaan</label>
                        <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ old('tanggal', $jadwal->tanggal) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="tempat" class="form-label">Tempat / Lokasi</label>
                        <input type="text" name="tempat" id="tempat" class="form-control" value="{{ old('tempat', $jadwal->tempat) }}" required autocomplete="off">
                    </div>

                    <div class="mb-3">
                        <label for="penanggung_jawab" class="form-label">Penanggung Jawab / Referee</label>
                        <input type="text" name="penanggung_jawab" id="penanggung_jawab" class="form-control" value="{{ old('penanggung_jawab', $jadwal->penanggung_jawab) }}" required autocomplete="off">
                    </div>

                    <div class="mb-4">
                        <label for="gambar" class="form-label">Poster / Gambar Event (Opsional)</label>
                        <input type="file" name="gambar" id="gambar" class="form-control">
                        @if($jadwal->gambar)
                            <div class="mt-2">
                                <small class="text-white text-opacity-50">Gambar saat ini:</small><br>
                                <img src="{{ asset('storage/' . $jadwal->gambar) }}" alt="Event" style="max-height: 80px; border-radius: 8px;" class="mt-1">
                            </div>
                        @endif
                    </div>

                    <div class="row g-2 pt-2 border-top border-secondary border-opacity-25">
                        <div class="col-6">
                            <a href="{{ url('/dashboard') }}" class="btn btn-cancel w-100">❌ Batal</a>
                        </div>
                        <div class="col-6">
                            <button type="submit" class="btn btn-save w-100">💾 Simpan Perubahan</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>