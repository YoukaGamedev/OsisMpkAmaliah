<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\JadwalGDS;
use App\Models\Pelanggaran;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class RekapGdsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $tanggal = $request->query('tanggal');
    $jadwal_id = $request->query('jadwal_gds');

    $nama = $request->query('nama');
    $kelas = $request->query('kelas');
    $jenis = $request->query('jenis');

    // Ambil semua jadwal GDS untuk dropdown filter
    $jadwalgds = JadwalGDS::all();

    // Query dasar untuk pelanggaran
    $query = Pelanggaran::with('siswa');

    // Filter berdasarkan tanggal jika ada
    if ($tanggal) {
        $query->whereDate('tanggal_pelanggaran', $tanggal);
    }

    // Filter berdasarkan jadwal_gds_id jika ada
    if ($jadwal_id) {
        $query->where('hari', $jadwal_id);
    }

    // Eksekusi query dengan pagination
    $rekapgds = Pelanggaran::with('siswa')
    ->when($tanggal, fn($q) => $q->whereDate('tanggal_pelanggaran', $tanggal))
    ->when($jadwal_id, fn($q) => $q->where('jadwal_gds_id', $jadwal_id))
    ->when($jenis, function ($q) use ($jenis) {
        $q->where($jenis, 0); // karena nilai pelanggaran = 1 (melanggar)
    })    
    ->when($nama, fn($q) => $q->whereHas('siswa', fn($s) => $s->where('nama', 'like', "%$nama%")))
    ->when($kelas, fn($q) => $q->whereHas('siswa', fn($s) => $s->where('kelas', $kelas)))
    ->paginate(10);

    // Jika request ingin JSON (biasanya AJAX), kembalikan data JSON
    if ($request->wantsJson()) {
        return response()->json($rekapgds);
    }

    // Data untuk grafik
    $chartData = $this->getChartData();

    $daftarKelas = Siswa::distinct()->pluck('kelas');
    $daftarJenisPelanggaran = collect((new Pelanggaran())->getFillable())
    ->reject(fn($item) => in_array($item, ['siswa_id', 'tanggal_pelanggaran'])) // kecuali field utama
    ->values();

    

    // Kirim ke view
    return view('admin.gds.rekapgds.rekapgds', compact(
        'rekapgds', 'jadwalgds', 'chartData',
        'daftarKelas', 'daftarJenisPelanggaran'
    ));
}


    /**
     * Get data for charts
     */
    private function getChartData()
{
    // Data untuk trend chart (monthly)
    $monthlyData = DB::table('pelanggaran')
        ->select(DB::raw('MONTH(tanggal_pelanggaran) as month'), DB::raw('COUNT(*) as total'))
        ->whereYear('tanggal_pelanggaran', date('Y'))
        ->groupBy('month')
        ->orderBy('month')
        ->get()
        ->pluck('total', 'month')
        ->toArray();

    $trendData = array_fill(1, 12, 0);
    foreach ($monthlyData as $month => $count) {
        $trendData[$month] = $count;
    }

    // Hitung jumlah tiap jenis pelanggaran
    $fields = [
        'dasi', 'kacuk', 'kaos_kaki', 'sabuk', 'nametag', 'sepatu',
        'jas', 'ring', 'bros', 'makeup', 'telat', 'ciput', 'hijab', 'almamater'
    ];

    $jenisCounts = [];

    foreach ($fields as $field) {
        $count = DB::table('pelanggaran')->where($field, 1)->count();
        $jenisCounts[$field] = $count;
    }

    // Ambil 3 pelanggaran terbanyak
    arsort($jenisCounts);
    $topJenis = array_slice($jenisCounts, 0, 3, true);

    // Format untuk chart: label dan total
    $jenisData = [];
    foreach ($topJenis as $jenis => $total) {
        $jenisData[] = [
            'jenis' => ucfirst(str_replace('_', ' ', $jenis)),
            'total' => $total
        ];
    }

    return [
        'trend' => array_values($trendData),
        'jenis' => $jenisData
    ];
}

}