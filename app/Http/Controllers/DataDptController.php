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
    public function index()
    {
        $users = DB::table('users')->get();
        return view('/admin/datadpt',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/admin/datadpt');
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

    // Hash the password before storing
    $validatedData['password'] = bcrypt($validatedData['password']);

    // Create the user using mass assignment
    User::create($validatedData);
    
    return redirect('/admin/datadpt')->with('status', 'Data berhasil ditambahkan');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
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
    return redirect('/admin/datadpt')->with('status', 'Data berhasil dihapus');
}

}
