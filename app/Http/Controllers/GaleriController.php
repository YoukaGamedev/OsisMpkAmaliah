<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    // Tampilkan semua data galeri
    public function index()
    {
        $galeri = Galeri::all();
        return view('admin.galeri.index', compact('galeri'));
    }

    // Tampilkan form tambah galeri
    public function create()
    {
        return view('admin.galeri.create');
    }

    // Simpan data galeri baru
    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        // Simpan foto ke folder public/storage/foto/
        $path = $request->file('foto')->store('foto', 'public');

        Galeri::create([
            'foto' => $path,
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('galeri.index')->with('success', 'Data galeri berhasil ditambahkan.');
    }

    // Tampilkan detail galeri
    public function show(string $id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('admin.galeri.show', compact('galeri'));
    }

    // Tampilkan form edit galeri
    public function edit(string $id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('admin.galeri.edit', compact('galeri'));
    }

    // Update data galeri
    public function update(Request $request, string $id)
    {
        $galeri = Galeri::findOrFail($id);

        $request->validate([
            'foto' => 'image|mimes:jpg,jpeg,png|max:2048',
            'judul' => 'required|string|max:255',
            'kategori' => 'required|string|max:255',
            'deskripsi' => 'required|string',
        ]);

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('foto', 'public');
            $galeri->foto = $path;
        }

        $galeri->judul = $request->judul;
        $galeri->kategori = $request->kategori;
        $galeri->deskripsi = $request->deskripsi;
        $galeri->save();

        return redirect()->route('galeri.index')->with('success', 'Data galeri berhasil diupdate.');
    }

    // Hapus galeri
    public function destroy(string $id)
    {
        $galeri = Galeri::findOrFail($id);
        $galeri->delete();

        return redirect()->route('galeri.index')->with('success', 'Data galeri berhasil dihapus.');
    }
}
