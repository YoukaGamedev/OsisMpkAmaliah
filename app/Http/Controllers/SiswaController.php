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
        return view('admin.gds.lembargds.searchdata', compact('siswa'));
    }

    public function search(Request $request)
    {
        $query = Siswa::query();

        if ($request->has('nama') && $request->input('nama') != '') {
            $query->where('nama', 'like', '%' . $request->input('nama') . '%');
        }

        $siswa = $query->paginate(10);
        return view('user.gds.lembargds.searchdata', compact('siswa'));
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

        // Cek atribut yang harus dicek
        $fields = ['dasi_kacu', 'kaos_kaki', 'sabuk', 'nametag', 'sepatu', 'jas', 'ring'];

        foreach ($fields as $field) {
            if (!$siswa->$field) {
                LembarGds::create([
                    'siswa_id' => $siswa->id
                ]);

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
        $siswa->update($request->all());

        // Cek apakah ada data "Tidak" di inputan, selain _token dan _method
        if (in_array('Tidak', $request->except('_token', '_method'))) {
            return redirect("admin/gds/rekapgds/{$id}")
                    ->with('warning', 'Beberapa data belum lengkap.');
        }

        return redirect("admin/gds/rekapgds/rekapgds/{$id}")
                ->with('success', 'Data berhasil diperbarui.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kelas' => 'required|string|max:50',
        ]);

        Siswa::create([
            'nama' => $request->nama,
            'kelas' => $request->kelas,
        ]);

        return redirect()->route('gds.index', ['tanggal' => $request->tanggal])
                         ->with('success', 'Absensi berhasil ditambahkan');
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('admin.gds.edit', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kelas' => 'required|string|max:50',
        ]);

        $siswa = Siswa::findOrFail($id);
        $siswa->update($request->all());

        return redirect()->route('gds.index')
                         ->with('success', 'Data siswa berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->back()->with('success', 'Data siswa berhasil dihapus!');
    }
}
