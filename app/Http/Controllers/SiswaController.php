<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Siswa;
use App\Models\LembarGds;

class SiswaController extends Controller
{
    public function search(Request $request)
{
    $query = $request->input('query');
    $siswa = Siswa::where('nama', 'LIKE', "%{$query}%")
                ->orWhere('kelas', 'LIKE', "%{$query}%")
                ->get();

    return view('admin.gds.lembargds', compact('siswa'));
}


public function scan(Request $request)
{
    $qrData = $request->input('qr_data');
    $siswa = Siswa::where('id', $qrData)->get(); // Gunakan `get()` agar selalu dalam bentuk koleksi

    if ($siswa->isEmpty()) {
        return back()->with('error', 'Data tidak ditemukan!');
    }

    return view('admin.gds.lembargds', compact('siswa'));
}


public function checkAndStoreLembarGds($id)
{
    $siswa = Siswa::find($id);

    if (!$siswa) {
        return back()->with('error', 'Siswa tidak ditemukan!');
    }

    // Cek apakah ada atribut dengan nilai 'Tidak'
    $fields = ['dasi_kacu', 'kaos_kaki', 'sabuk', 'nametag', 'sepatu', 'jas', 'ring'];
    foreach ($fields as $field) {
        if (!$siswa->$field) {
            LembarGds::create(['siswa_id' => $siswa->id]);
            return back()->with('success', 'Data siswa berhasil dimasukkan ke Lembar GDS!');
        }
    }

    return back()->with('info', 'Semua data siswa sudah lengkap.');
}

}
