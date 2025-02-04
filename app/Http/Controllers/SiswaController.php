<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Siswa;
use App\Models\LembarGds;
use App\Models\RekapGds;

use DB;

class SiswaController extends Controller
{
    
    public function index(Request $request)
{
    $siswa = DB::table('siswas')->get(); 
    return view('admin/gds/lembargds/searchdata', compact('siswa')); 
}

public function search(Request $request)
{
    // Get the search query from the request
    $query = $request->input('query');

    // If the query is empty, show all students
    if (empty($query)) {
        $siswa = Siswa::all(); // Get all students
    } else {
        // If there's a query, search based on 'nama' or 'kelas'
        $siswa = Siswa::where('nama', 'LIKE', "%$query%")
                    ->orWhere('kelas', 'LIKE', "%$query%")
                    ->get(); // Get all students matching the query
    }

    // Return the view with the students and the search query
    return view('siswa.index', compact('siswa', 'query'));
}



public function show($id)
{
    $siswa = Siswa::findOrFail($id);
    return view('admin.gds.lembargds.show', compact('siswa'));
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
    return view('admin.gds.lembargds.siswa', compact('siswa'));
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
    return redirect("admin/gds/rekapgds/rekapgds/{$id}")
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
