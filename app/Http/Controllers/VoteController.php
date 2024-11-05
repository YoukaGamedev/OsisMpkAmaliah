<?php

namespace App\Http\Controllers;

use App\Models\Datakandidat;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource (voting results).
     */
    public function index()
    {
        // Join votes with candidates and count votes per candidate for admin view
        $datakandidat = DB::withCount('votes')->get();
        return view('/admin/votes', compact('datakandidat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created vote in storage.
     */
    public function store(Request $request, $kandidatId)
    {
        // Check if the user is logged in
        if (!Auth::check()) {
            // Store the selected candidate in session and redirect to login
            session(['selected_kandidat' => $kandidatId]);
            return redirect()->route('login');
        }

        $siswa = Auth::user(); // Get the logged-in user

        // Check if the user has already voted
        if (Vote::where('datadpt_id', $siswa->id)->exists()) {
            return redirect()->back()->with('error', 'You have already voted!');
        }

        // Get the selected candidate
        $kandidat = Datakandidat::find($kandidatId);
        if (!$kandidat) {
            return redirect()->back()->with('error', 'Candidate not found!');
        }

        // Store the vote in the database
        Vote::create([
            'datadpt_id' => $siswa->id,
            'datakandidat_id' => $kandidatId,
        ]);

        // Logout user after voting
        Auth::logout();

        return redirect()->route('login')->with('success', 'Your vote has been recorded, and you have been logged out.');
    }

    /**
     * Check session after login to complete voting process.
     */
    public function afterLoginVote()
    {
        if (session()->has('selected_kandidat')) {
            $kandidatId = session('selected_kandidat');
            session()->forget('selected_kandidat'); // Clear the session data

            // Redirect to store function to process vote
            return $this->store(new Request, $kandidatId);
        }

        return redirect()->route('home'); // Redirect to home if no candidate in session
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
        //
    }
}
