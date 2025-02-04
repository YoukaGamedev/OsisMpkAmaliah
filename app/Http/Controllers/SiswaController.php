<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Siswa;
use App\Models\LembarGds;
use App\Models\RekapGds;

class SiswaController extends Controller
{
    
    public function index(Request $request)
{
    $query = $request->input('search');
    $siswa = Siswa::when($query, function ($q) use ($query) {
        return $q->where('nama', 'like', "%$query%")
                 ->orWhere('kelas', 'like', "%$query%");
    })->get();

    return view('admin.gds.searchdata', compact('siswa', 'query'));
}


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

public function edited($id)
{
    $siswa = Siswa::findOrFail($id);
    return view('admin.gds.siswa', compact('siswa'));
}

public function updated(Request $request, $id)
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

public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'nama' => 'required|string|max:255',
        'kelas' => 'required|string|max:50',
        'dasi_kacu' => 'required|boolean',
        'kaos_kaki' => 'required|boolean',
        'sabuk' => 'required|boolean',
        'nametag' => 'required|boolean',
        'sepatu' => 'required|boolean',
        'jas' => 'required|boolean',
        'ring' => 'required|boolean',
    ]);

    // Simpan data siswa ke database
    Siswa::create([
        'nama' => $request->nama,
        'kelas' => $request->kelas,
        'dasi_kacu' => $request->dasi_kacu,
        'kaos_kaki' => $request->kaos_kaki,
        'sabuk' => $request->sabuk,
        'nametag' => $request->nametag,
        'sepatu' => $request->sepatu,
        'jas' => $request->jas,
        'ring' => $request->ring,
    ]);

    // Redirect kembali dengan pesan sukses
    return redirect()->back()->with('success', 'Data siswa berhasil ditambahkan!');
}

public function edit($id)
{
    $siswa = Siswa::findOrFail($id);
    return view('admin.gds.tambahdata.edit', compact('siswa'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'kelas' => 'required|string|max:255',
        'dasi_kacu' => 'required|boolean',
        'kaos_kaki' => 'required|boolean',
        'sabuk' => 'required|boolean',
        'nametag' => 'required|boolean',
        'sepatu' => 'required|boolean',
        'jas' => 'required|boolean',
        'ring' => 'required|boolean',
    ]);

    $siswa = Siswa::findOrFail($id);
    $siswa->update($request->all());

    return redirect()->route('tambahdata.index')->with('success', 'Data siswa berhasil diperbarui!');
}


public function destroy($id)
{
    // Cari data siswa berdasarkan ID
    $siswa = Siswa::findOrFail($id);

    // Hapus data siswa
    $siswa->delete();

    // Redirect kembali dengan pesan sukses
    return redirect()->back()->with('success', 'Data siswa berhasil dihapus!');
}


}
