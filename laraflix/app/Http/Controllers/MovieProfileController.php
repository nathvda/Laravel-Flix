<?php

namespace App\Http\Controllers;

use App\Models\MovieProfile;
use Illuminate\Http\Request;

class MovieProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        MovieProfile::create([
            'movie_id' => $request['movie'],
            'profile_id' => $request['profile']
        ]);

        return redirect('/browse/'. $request['profile']);

    }

    /**
     * Display the specified resource.
     */
    public function show(MovieProfile $movieProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MovieProfile $movieProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MovieProfile $movieProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        

        MovieProfile::where('profile_id', $request['profile'])->where('movie_id', $request['movie'])->delete();

        return redirect('/browse/'. $request['profile']);
    }
}
