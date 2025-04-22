<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Agenda;
use App\Models\Siswa;
use App\Models\JadwalGDS;

use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
    
     */
    public function index()
    {
        return view('user.welcome');
    }

    public function struktur()
    {
        $structures = DB::table('structures')->get();
        return view('user.struktur.index',['structures'=>$structures]);
    }

    public function agenda()
    {
        $agendas = DB::table('agendas')->get();
        return view('user.agenda.index',['agendas'=>$agendas]);
    }

    public function berespilih()
    {
        return view('user.pemilu.berespilih');
    }

    public function agendaS($id)
{
    $agenda = Agenda::findOrFail($id);
    return view('user.agenda.show', compact('agenda'));
}

    public function rekapgds(Request $request)
    {
        $tanggal = $request->query('tanggal');

        if ($tanggal) {
            $rekap = Siswa::whereDate('tanggal', $tanggal)
                ->select('id', 'nama', 'kelas', 'dasi_kacu', 'kaos_kaki', 'sabuk', 'nametag', 'sepatu', 'jas', 'ring', 'bros', 'makeup', 'telat', 'ciput', 'hijab', 'almamater', 'wearpack')
                ->get();

            return response()->json($rekap);
        }

        $jadwalgds = JadwalGDS::all();

        $rekapgds = Siswa::select('id', 'nama', 'kelas', 'dasi_kacu', 'kaos_kaki', 'sabuk', 'nametag', 'sepatu', 'jas', 'ring', 'bros', 'makeup', 'telat', 'ciput', 'hijab', 'almamater', 'wearpack')->get();
        return view('user.gds.rekapgds.rekapgds', compact('rekapgds','jadwalgds'));
    }

    public function jadwalgds() {
        $jadwal = JadwalGds::all();
        return view('user.gds.jadwalgds.index', compact('jadwal'));
    }

}
