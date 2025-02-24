<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Structure;
use Illuminate\Support\Facades\Storage;

class StructureController extends Controller
{
    public function index()
    {
        $structures = Structure::all();
        return view('admin.struktur.index', compact('structures'));
    }

    public function create()
    {
        return view('admin.struktur.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $photoPath = $request->file('photo') ? $request->file('photo')->store('photos', 'public') : null;

        Structure::create([
            'name' => $request->name,
            'position' => $request->position,
            'photo' => $photoPath
        ]);

        return redirect()->route('structure.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit(Structure $structure)
    {
        return view('admin.struktur.edit', compact('structure'));
    }

    public function update(Request $request, Structure $structure)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('photo')) {
            if ($structure->photo) {
                Storage::disk('public')->delete($structure->photo);
            }
            $photoPath = $request->file('photo')->store('photos', 'public');
        } else {
            $photoPath = $structure->photo;
        }

        $structure->update([
            'name' => $request->name,
            'position' => $request->position,
            'photo' => $photoPath
        ]);

        return redirect()->route('structure.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy(Structure $structure)
    {
        if ($structure->photo) {
            Storage::disk('public')->delete($structure->photo);
        }

        $structure->delete();

        return redirect()->route('structure.index')->with('success', 'Data berhasil dihapus!');
    }
}
