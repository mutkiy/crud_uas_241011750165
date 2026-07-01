<?php

namespace App\Http\Controllers;

use App\Models\Pemain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PemainController extends Controller
{
    // 1. Tampilkan semua data pemain (Read)
    public function index()
    {
        $pemains = Pemain::all();
        return view('pemain.index', compact('pemains'));
    }

    // 2. Tampilkan form tambah data
    public function create()
    {
        return view('pemain.create');
    }

    // 3. Simpan data baru ke database (Create)
    public function store(Request $request)
    {
        $request->validate([
            'nama_pemain'     => 'required',
            'cabang_olahraga' => 'required',
            'klub'            => 'required',
            'usia'            => 'required|numeric',
            'gambar'          => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'nama_pemain.required' => 'Nama pemain wajib diisi!',
            'gambar.required'      => 'Foto pemain wajib diunggah!',
        ]);

        if ($request->hasFile('gambar')) {
            $namaGambar = $request->file('gambar')->store('pemain', 'public');
        }

        Pemain::create([
            'nama_pemain'     => $request->nama_pemain,
            'cabang_olahraga' => $request->cabang_olahraga,
            'klub'            => $request->klub,
            'usia'            => $request->usia,
            'gambar'          => $namaGambar,
        ]);

        return redirect('/pemain')->with('success', 'Data Pemain Berhasil Ditambahkan');
    }

    // 4. Tampilkan form edit data
    public function edit(string $id)
    {
        $pemain = Pemain::findOrFail($id);
        return view('pemain.edit', compact('pemain'));
    }

    // 5. Update data di database (Update)
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_pemain'     => 'required',
            'cabang_olahraga' => 'required',
            'klub'            => 'required',
            'usia'            => 'required|numeric',
            'gambar'          => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $pemain = Pemain::findOrFail($id);

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($pemain->gambar && file_exists(public_path('storage/' . $pemain->gambar))) {
                @unlink(public_path('storage/' . $pemain->gambar));
            }
            $namaGambar = $request->file('gambar')->store('pemain', 'public');
        } else {
            $namaGambar = $pemain->gambar;
        }

        $pemain->update([
            'nama_pemain'     => $request->nama_pemain,
            'cabang_olahraga' => $request->cabang_olahraga,
            'klub'            => $request->klub,
            'usia'            => $request->usia,
            'gambar'          => $namaGambar,
        ]);

        return redirect('/pemain')->with('success', 'Data Pemain Berhasil Diubah');
    }

    // 6. Hapus data dari database (Delete)
    public function destroy(string $id)
    {
        $pemain = Pemain::findOrFail($id);

        if ($pemain->gambar && file_exists(public_path('storage/' . $pemain->gambar))) {
            @unlink(public_path('storage/' . $pemain->gambar));
        }

        $pemain->delete();

        return redirect('/pemain')->with('success', 'Data Pemain Berhasil Dihapus');
    }
}