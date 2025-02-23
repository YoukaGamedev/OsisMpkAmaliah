<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalGds;

class JadwalPiketGDSController extends Controller {
    public function index() {
        $jadwal = JadwalGds::all();
        return view('admin.gds.jadwalgds.index', compact('jadwal'));
    }

    public function create() {
        return view('admin.gds.jadwalgds.create');
    }

    public function store(Request $request) {
        $request->validate([
            'hari' => 'required|string|max:50',
            'pj' => 'required|string|max:255',
            'petugas_1' => 'required|string|max:255',
            'petugas_2' => 'nullable|string|max:255',
            'petugas_3' => 'nullable|string|max:255',
            'petugas_4' => 'nullable|string|max:255',
        ]);

        JadwalGds::create($request->all());
        return redirect()->route('jadwalgds.index')->with('success', 'Jadwal berhasil ditambahkan!');
    }

    public function show($id) {
        $jadwal = JadwalGds::findOrFail($id);
        return view('admin.gds.jadwalgds.show', compact('jadwal'));
    }

    public function edit($id) {
        $jadwal = JadwalGds::findOrFail($id);
        return view('admin.gds.jadwalgds.edit', compact('jadwal'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'hari' => 'required|string|max:50',
            'pj' => 'required|string|max:255',
            'petugas_1' => 'required|string|max:255',
            'petugas_2' => 'nullable|string|max:255',
            'petugas_3' => 'nullable|string|max:255',
            'petugas_4' => 'nullable|string|max:255',
        ]);

        $jadwal = JadwalGds::findOrFail($id);
        $jadwal->update($request->all());
        return redirect()->route('jadwalgds.index')->with('success', 'Jadwal berhasil diperbarui!');
    }

    public function destroy($id) {
        $jadwal = JadwalGds::findOrFail($id);
        $jadwal->delete();
        return redirect()->route('jadwalgds.index')->with('success', 'Jadwal berhasil dihapus!');
    }
}
