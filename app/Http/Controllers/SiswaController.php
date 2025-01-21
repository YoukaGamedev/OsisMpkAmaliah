<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Siswa;
use App\Models\LembarGds;
use App\Models\RekapGds;

class SiswaController extends Controller
{
    
    public function search(Request $request)
    {
        $query = $request->input('query');
        
        // Mencari siswa berdasarkan nama atau kelas
        $siswa = Siswa::where('nama', 'LIKE', "%{$query}%")
                        ->orWhere('kelas', 'LIKE', "%{$query}%")
                        ->get();
    
        // Cek apakah data siswa ditemukan
        $siswaNotFound = $siswa->isEmpty();
    
        // Ambil satu data rekapgds berdasarkan PJ
        $rekapgds = RekapGds::where('pj', 'LIKE', "%{$query}%")
                            ->first(); // Mengambil satu data rekapgds berdasarkan PJ
        
        // Cek apakah data rekapgds ditemukan
        $rekapgdsNotFound = !$rekapgds; // Jika rekapgds null, berarti tidak ditemukan
        
        // Kirimkan kedua variabel ke view
        return view('admin.gds.lembargds', compact('siswa', 'rekapgds', 'siswaNotFound', 'rekapgdsNotFound'));
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

public function storeScan(Request $request)
{
    $data = json_decode($request->input('qr_data'), true);

    // Proses data QR Code
    return response()->json(['message' => 'Data diterima', 'data' => $data]);
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

public function edit($id)
{
    $siswa = Siswa::findOrFail($id);
    return view('admin.gds.siswa', compact('siswa'));
}

public function update(Request $request, $id)
{
    $siswa = Siswa::findOrFail($id);

    // Update data siswa
    $siswa->update($request->all());

    // Cek apakah ada data "Tidak" di request (kecuali _token dan _method)
    if (in_array('Tidak', $request->except('_token', '_method'))) {
        return redirect("admin/gds/rekapgds/{$id}")
                         ->with('warning', 'Beberapa data belum lengkap.');
    }

    // Redirect ke halaman rekapgds/{id} setelah berhasil di-update
    return redirect("admin/gds/rekapgds/{$id}")
       ->with('success', 'Data berhasil diperbarui.');

}



}
