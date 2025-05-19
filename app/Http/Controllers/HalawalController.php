<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Structure;

class HalawalController extends Controller
{
    public function profilosis()
    {
        $structures = structure::all();
        return view('/profilosis', ['structures' => $structures]);
    }
}
