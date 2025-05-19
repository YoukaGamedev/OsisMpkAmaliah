<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Illuminate\Support\Facades\Storage;

class TambahDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Siswa::query();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('nama', 'like', "%$search%")
                  ->orWhere('kelas', 'like', "%$search%");
        }

        $siswa = $query->get();
        return view('admin.gds.tambahdata.index', compact('siswa'));
    }

    public function show($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('admin.gds.tambahdata.show', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gds.tambahdata.tambahdata');
    }

    /**
     * Store a newly created resource in storage.
     */

public function store(Request $request)
{
    $request->validate([
        'nama' => 'required|string',
        'kelas' => 'required|string',
        'foto' => 'nullable|image|max:2048',
    ]);

    $fotoPath = $request->hasFile('foto') ? $request->file('foto')->store('foto_siswa', 'public') : null;

    $siswa = Siswa::create([
        'nama' => $request->nama,
        'kelas' => $request->kelas,
        'foto' => $fotoPath,
        'qr_code' => '',
    ]);

    // Check if GD extension is available
    if (!extension_loaded('gd')) {
        // Log the error
        \Log::error('GD extension is not available. QR code generation skipped.');
        
        // Return with a different message
        return redirect()->route('tambahdata.index')
            ->with('success', 'Siswa berhasil ditambahkan! (QR code tidak dibuat karena GD extension tidak tersedia)');
    }

    try {
        $qrContent = "Siswa: {$siswa->nama} | Kelas: {$siswa->kelas} | ID: {$siswa->id}";
        
        $qrCode = new QrCode($qrContent);
        
        $writer = new PngWriter();
        $result = $writer->write($qrCode);
        
        $qrPath = 'qr_codes/' . uniqid('qr_') . '.png';
        Storage::disk('public')->put($qrPath, $result->getString());
        
        $siswa->update(['qr_code' => $qrPath]);
        
        return redirect()->route('tambahdata.index')
            ->with('success', 'Siswa berhasil ditambahkan dengan QR code!');
    } catch (\Exception $e) {
        // Log the error
        \Log::error('QR code generation failed: ' . $e->getMessage());
        
        return redirect()->route('tambahdata.index')
            ->with('success', 'Siswa berhasil ditambahkan! (QR code gagal dibuat: ' . $e->getMessage() . ')');
    }
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('admin.gds.tambahdata.edit', compact('siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'kelas' => 'required|string|max:50',
            'foto' => 'nullable|image|max:2048',
        ]);

        $siswa = Siswa::findOrFail($id);

        if ($request->hasFile('foto')) {
    $path = $request->file('foto')->store('foto_siswa', 'public');
    $siswa->foto = $path;
}

if ($request->hasFile('qr_code')) {
    $path = $request->file('qr_code')->store('qr_siswa', 'public');
    $siswa->qr_code = $path;
}


        $siswa->nama = $request->nama;
        $siswa->kelas = $request->kelas;
        $siswa->save();

        return redirect()->route('tambahdata.index')->with('status', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);

        // Hapus foto dan QR jika ada
        if ($siswa->foto && Storage::disk('public')->exists($siswa->foto)) {
            Storage::disk('public')->delete($siswa->foto);
        }
        if ($siswa->qr_code && Storage::disk('public')->exists($siswa->qr_code)) {
            Storage::disk('public')->delete($siswa->qr_code);
        }

        $siswa->delete();

        return redirect()->route('tambahdata.index')->with('status', 'Data berhasil dihapus!');
    }
}
