<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalPertandingan;
use Illuminate\Support\Facades\Storage;

class JadwalController extends Controller
{
    public function index()
    {
        $jadwals = JadwalPertandingan::all();
        return view('jadwal.index', compact('jadwals'));
    }

    public function create()
    {
        return view('jadwal.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_event' => 'required|string|max:50|unique:jadwal_pertandingan,id_event',
            'nama_event' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'tempat' => 'required|string|max:255',
            'penanggung_jawab' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('events', 'public');
        }

        JadwalPertandingan::create($data);

        return redirect('/dashboard')->with('success', 'Jadwal Pertandingan berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $jadwal = JadwalPertandingan::findOrFail($id);
        return view('jadwal.edit', compact('jadwal'));
    }

    public function update(Request $request, $id)
    {
        $jadwal = JadwalPertandingan::findOrFail($id);

        $request->validate([
            'nama_event' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'tempat' => 'required|string|max:255',
            'penanggung_jawab' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('gambar')) {
            if ($jadwal->gambar) {
                Storage::disk('public')->delete($jadwal->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('events', 'public');
        }

        $jadwal->update($data);

        return redirect('/dashboard')->with('success', 'Jadwal Pertandingan berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $jadwal = JadwalPertandingan::findOrFail($id);
        if ($jadwal->gambar) {
            Storage::disk('public')->delete($jadwal->gambar);
        }
        $jadwal->delete();

        return redirect('/dashboard')->with('success', 'Jadwal Pertandingan berhasil dihapus!');
    }
}