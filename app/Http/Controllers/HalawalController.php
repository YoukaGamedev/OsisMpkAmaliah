<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Galeri;
use App\Models\Structure;
use App\Models\Agenda;

class HalawalController extends Controller
{
    public function profilosis()
    {
        $structures = structure::all();
        return view('/profilosis', ['structures' => $structures]);
    }

    public function galeri()
    {
        $galeri = Galeri::all();
        return view('/gambar', compact('galeri'));
    }

    public function programkerja()
    {
        $agendas = Agenda::all(); // Ambil semua data agenda dari database
        return view('/programkerja', compact('agendas')); // Kirim data ke view
    }
}
