<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataDpt;
use App\Models\User;

use DB;

class DataDptController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $query = DB::table('users');

    // Check if there is a 'name' search term and filter accordingly
    if ($request->has('name') && $request->input('name') != '') {
        $query->where('name', 'like', '%' . $request->input('name') . '%');
    }

    // Get the filtered users
    $users = $query->get();

    return view('/admin/pemilu/datadpt', ['users' => $users]);
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/admin/pemilu/datadpt');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate the incoming request data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email|max:255',
        'password' => 'required|string|min:8|confirmed', // You might want a 'confirmed' rule for password confirmation
    ]);

    // Create the user using mass assignment
    User::create($validatedData);
    
    return redirect('/admin/pemilu/datadpt')->with('status', 'Data berhasil ditambahkan');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    // Show the edit form
public function edit($id)
{
    $users = User::findOrFail($id); // Find the DPT by ID
    return view('admin.pemilu.datadpt', compact('users')); // Pass the data to the edit view
}

// Update the data
public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'password' => 'nullable|min:8|confirmed', // Optional: password validation
    ]);

    $users = User::findOrFail($id);
    $users->name = $request->name;
    $users->email = $request->email;
    if ($request->password) {
        $users->password = bcrypt($request->password); // Only update password if provided
    }
    $users->save();

    return redirect()->route('admin.pemilu.datadpt')->with('status', 'Data updated successfully!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    // Find the data by its ID, if it doesn't exist, it will throw a ModelNotFoundException
    $users = User::findOrFail($id);

    // Delete the found record
    $users->delete();

    // Redirect back with a success message
    return redirect('/admin/pemilu/datadpt')->with('status', 'Data berhasil dihapus');
}

}
