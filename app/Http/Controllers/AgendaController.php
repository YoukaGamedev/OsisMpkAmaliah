<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Menampilkan daftar semua agenda.
     */
    public function index()
    {
        $agendas = Agenda::all(); // Ambil semua data agenda dari database
        return view('admin.agenda.index', compact('agendas')); // Kirim data ke view
    }

    /**
     * Menampilkan halaman untuk membuat agenda baru.
     */
    public function create()
    {
        return view('admin.agenda.create'); // Tampilkan form tambah agenda
    }

    /**
     * Menyimpan agenda baru ke dalam database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'pelaksana' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        Agenda::create($request->all()); // Simpan data ke database

        return redirect()->route('agenda.index')->with('success', 'Agenda berhasil ditambahkan!');
    }

    /**
     * Menampilkan detail agenda tertentu.
     */
    public function show(Agenda $agenda)
    {
        return view('admin.agenda.show', compact('agenda')); // Kirim data agenda ke view
    }

    /**
     * Menampilkan halaman edit untuk agenda tertentu.
     */
    public function edit(Agenda $agenda)
    {
        return view('admin.agenda.edit', compact('agenda'));
    }

    /**
     * Memperbarui agenda tertentu di database.
     */
    public function update(Request $request, Agenda $agenda)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'pelaksana' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal' => 'required|date',
        ]);

        $agenda->update($request->all()); // Update data di database

        return redirect()->route('agenda.index')->with('success', 'Agenda berhasil diperbarui!');
    }

    /**
     * Menghapus agenda dari database.
     */
    public function destroy(Agenda $agenda)
    {
        $agenda->delete(); // Hapus data dari database

        return redirect()->route('agenda.index')->with('success', 'Agenda berhasil dihapus!');
    }
}
