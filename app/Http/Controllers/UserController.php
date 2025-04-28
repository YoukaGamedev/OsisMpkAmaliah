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

    public function jadwalgds() {
        $jadwal = JadwalGds::all();
        return view('user.gds.jadwalgds.index', compact('jadwal'));
    }

}
