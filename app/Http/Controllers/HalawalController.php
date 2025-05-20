<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Galeri;
use App\Models\Structure;

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
}
