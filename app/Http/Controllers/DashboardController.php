<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard;
use App\Models\User;
use App\Models\Vote;
use App\Models\HasilPemilihan;
use DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Total DPT
        $totalDPT = User::whereIn('sekolah', ['A1', 'Guru', 'A2'])->count();
        
        // Sudah memilih (total)
        $sudahMemilih = Vote::distinct('user_id')->count('user_id');
        
        // Detail per kategori - Sudah Vote
        $guruSudahVote = Vote::whereHas('user', function($q) {
            $q->where('sekolah', 'Guru');
        })->distinct('user_id')->count('user_id');
        
        $a1SudahVote = Vote::whereHas('user', function($q) {
            $q->where('sekolah', 'A1');
        })->distinct('user_id')->count('user_id');
        
        $a2SudahVote = Vote::whereHas('user', function($q) {
            $q->where('sekolah', 'A2');
        })->distinct('user_id')->count('user_id');
        
        // Total per kategori
        $totalGuru = User::where('sekolah', 'Guru')->count();
        $totalA1 = User::where('sekolah', 'A1')->count();
        $totalA2 = User::where('sekolah', 'A2')->count();
        
        // User yang belum vote
        $userBelumVote = User::whereIn('sekolah', ['A1', 'Guru', 'A2'])
            ->whereNotIn('id', function($query) {
                $query->select('user_id')
                    ->from('votes')
                    ->distinct();
            })
            ->orderBy('sekolah')
            ->orderBy('name')
            ->get();
        
        $dashboard = DB::table('dashboard')->get();
        
        return view('admin/pemilu/dashboardpemilu/dashboardpemilu', compact(
            'dashboard',
            'totalDPT',
            'sudahMemilih',
            'guruSudahVote',
            'a1SudahVote',
            'a2SudahVote',
            'totalGuru',
            'totalA1',
            'totalA2',
            'userBelumVote'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboardpemilu');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // VALIDASI DATA
        $request->validate([
            'npsn' => 'required|numeric|digits:8',
            'nama_sekolah' => 'required|string|max:255',
            'nama_kepsek' => 'required|string|max:255',
            'alamat_jalan' => 'required|string|max:255',
            'desa' => 'required|string|max:100',
            'kecamatan' => 'required|string|max:100',
            'kota' => 'required|string|max:100',
            'tahun_pelajaran' => 'required|string|regex:/^\d{4}\/\d{4}$/',
            'tanggal' => 'required|date',
        ]);

        DB::table('dashboard')->insert([
            'npsn' => $request->npsn,
            'nama_sekolah' => $request->nama_sekolah,
            'nama_kepsek' => $request->nama_kepsek,
            'nip' => $request->nip,
            'alamat_jalan' => $request->alamat_jalan,
            'desa' => $request->desa,
            'kecamatan' => $request->kecamatan,
            'kota' => $request->kota,
            'tahun_pelajaran' => $request->tahun_pelajaran,
            'tanggal' => $request->tanggal,
        ]);

        return redirect('dashboardpemilu')->with('status', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dashboard = DB::table('dashboard')->where('id', $id)->first();
        return view('dashboardpemilu.show', ['dashboard' => $dashboard]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $dashboard = DB::table('dashboard')->where('id', $id)->first();
        return view('/admin/pemilu/dashboardpemilu/edit', ['dashboard' => $dashboard]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // VALIDASI DATA
        $request->validate([
            'npsn' => 'required|numeric|digits:8',
            'nama_sekolah' => 'required|string|max:255',
            'nama_kepsek' => 'required|string|max:255',
            'alamat_jalan' => 'required|string|max:255',
            'desa' => 'required|string|max:100',
            'kecamatan' => 'required|string|max:100',
            'kota' => 'required|string|max:100',
            'tahun_pelajaran' => 'required|string|regex:/^\d{4}\/\d{4}$/',
            'tanggal' => 'required|date',
        ]);

        DB::table('dashboard')->where('id', $id)->update([
            'npsn' => $request->npsn,
            'nama_sekolah' => $request->nama_sekolah,
            'nama_kepsek' => $request->nama_kepsek,
            'nip' => $request->nip,
            'alamat_jalan' => $request->alamat_jalan,
            'desa' => $request->desa,
            'kecamatan' => $request->kecamatan,
            'kota' => $request->kota,
            'tahun_pelajaran' => $request->tahun_pelajaran,
            'tanggal' => $request->tanggal,
        ]);

        return redirect('dashboardpemilu')->with('status', 'Data berhasil diperbarui');
    }

    public function togglePemilu()
    {
        $dashboard = Dashboard::first();

        if (!$dashboard) {
            $dashboard = new Dashboard();
            $dashboard->status_pemilu = 1; // Pemilu dimulai
            $dashboard->save();

            return redirect()->back()->with('success', 'Pemilu telah dimulai!');
        }

        // Toggle status: jika 1 jadi 0, jika 0 jadi 1
        $dashboard->status_pemilu = $dashboard->status_pemilu == 1 ? 0 : 1;
        $dashboard->save();

        $message = $dashboard->status_pemilu == 1 ? 'Pemilu telah dimulai!' : 'Pemilu telah dihentikan!';

        return redirect()->back()->with('success', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('dashboard')->where('id', $id)->delete();
        return redirect('dashboardpemilu')->with('status', 'Data berhasil dihapus');
    }
}