<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggaran;
use App\Models\Siswa;
use App\Models\JadwalGds;
use Carbon\Carbon;

class PelanggaranController extends Controller
{
    public function index(Request $request)
    {
        // Ambil tanggal dari request atau default hari ini
        $tanggal = $request->input('tanggal', Carbon::now()->toDateString());

        // Set bahasa ke Indonesia
        Carbon::setLocale('id');

        // Terjemahkan hari dari tanggal
        $hari = Carbon::parse($tanggal)->translatedFormat('l');

        // Ambil data pelanggaran berdasarkan tanggal
        $absensi = Pelanggaran::where('tanggal_pelanggaran', $tanggal)
            ->join('siswas', 'pelanggaran.siswa_id', '=', 'siswas.id')
            ->get([
                'pelanggaran.id_pelanggaran as id_pelanggaran',  // Tambahkan ini
                'siswas.id', 
                'siswas.nama', 
                'siswas.kelas', 
                'pelanggaran.dasi', 
                'pelanggaran.kacuk', 
                'pelanggaran.kaos_kaki', 
                'pelanggaran.sabuk', 
                'pelanggaran.nametag', 
                'pelanggaran.sepatu', 
                'pelanggaran.jas', 
                'pelanggaran.ring', 
                'pelanggaran.bros', 
                'pelanggaran.makeup', 
                'pelanggaran.telat', 
                'pelanggaran.ciput', 
                'pelanggaran.hijab', 
                'pelanggaran.almamater', 
            ]);

        // Kirim ke view
        $pelanggarans = Pelanggaran::with('siswa')->latest()->paginate(10);
        return view('user.gds.indexgds', compact('pelanggarans','absensi', 'tanggal'));
    }

    public function create()
    {
        $siswas = Siswa::all();
        return view('user.gds.lembargds.create', compact('siswas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required|exists:siswas,id',
            'tanggal_pelanggaran' => 'required|date',
        ]);

        Pelanggaran::create([
            'siswa_id' => $request->siswa_id,
            'tanggal_pelanggaran' => $request->tanggal_pelanggaran,
            'dasi' => $request->dasi ?? 1,
            'kacuk' => $request->kacuk ?? 1,
            'kaos_kaki' => $request->kaos_kaki ?? 1,
            'sabuk' => $request->sabuk ?? 1,
            'nametag' => $request->nametag ?? 1,
            'sepatu' => $request->sepatu ?? 1,
            'jas' => $request->jas ?? 1,
            'ring' => $request->ring ?? 1,
            'bros' => $request->bros ?? 1,
            'makeup' => $request->makeup ?? 1,
            'telat' => $request->telat ?? 1,
            'ciput' => $request->ciput ?? 1,
            'hijab' => $request->hijab ?? 1,
            'almamater' => $request->almamater ?? 1,
        ]);

        return redirect()->route('pelanggaran.index')->with('success', 'Data pelanggaran berhasil ditambahkan.');
    }

    public function show($id)
{
    $pelanggaran = Pelanggaran::with('siswa')->findOrFail($id);
    return view('user.gds.lembargds.show', [
        'pelanggaran' => $pelanggaran,
        'siswa' => $pelanggaran->siswa
    ]);
}



    public function edit($id)
{
    $pelanggaran = Pelanggaran::with('siswa')->where('id_pelanggaran', $id)->firstOrFail();
    $siswas = Siswa::all(); // jika diperlukan
    return view('user.gds.lembargds.edit', compact('pelanggaran', 'siswas'));
}


    public function update(Request $request, $id)
{
    // Validasi input
    $request->validate([
        'tanggal_pelanggaran' => 'required|date',
        // Validasi untuk setiap atribut pelanggaran
        'dasi' => 'boolean',
        'kacuk' => 'boolean',
        'kaos_kaki' => 'boolean',
        'sabuk' => 'boolean',
        'nametag' => 'boolean',
        'sepatu' => 'boolean',
        'jas' => 'boolean',
        'ring' => 'boolean',
        'bros' => 'boolean',
        'makeup' => 'boolean',
        'telat' => 'boolean',
        'ciput' => 'boolean',
        'hijab' => 'boolean',
        'almamater' => 'boolean',
    ]);

    // Ambil data pelanggaran berdasarkan id
    $pelanggaran = Pelanggaran::findOrFail($id);

    // Update data pelanggaran
    $pelanggaran->tanggal_pelanggaran = $request->tanggal_pelanggaran;
    $pelanggaran->dasi = $request->dasi;
    $pelanggaran->kacuk = $request->kacuk;
    $pelanggaran->kaos_kaki = $request->kaos_kaki;
    $pelanggaran->sabuk = $request->sabuk;
    $pelanggaran->nametag = $request->nametag;
    $pelanggaran->sepatu = $request->sepatu;
    $pelanggaran->jas = $request->jas;
    $pelanggaran->ring = $request->ring;
    $pelanggaran->bros = $request->bros;
    $pelanggaran->makeup = $request->makeup;
    $pelanggaran->telat = $request->telat;
    $pelanggaran->ciput = $request->ciput;
    $pelanggaran->hijab = $request->hijab;
    $pelanggaran->almamater = $request->almamater;

    // Simpan perubahan
    $pelanggaran->save();

    // Redirect setelah sukses
    return redirect()->route('pelanggaran.index')->with('success', 'Pelanggaran berhasil diperbarui.');
}


    public function destroy($id)
    {
        $pelanggaran = Pelanggaran::findOrFail($id);
        $pelanggaran->delete();

        return redirect()->back()->with('success', 'Data pelanggaran berhasil dihapus.');
    }
}
