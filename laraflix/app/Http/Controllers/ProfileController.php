<?php

namespace App\Http\Controllers;

use App\Models\Avatar;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Requests\CreateProfileRequest;

class ProfileController extends Controller
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
        return view('profiles.create', ['avatars' => Avatar::get()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateProfileRequest $request)
    {

        Profile::create([
            'username' => $request['username'],
            'avatar_id' => $request['avatar_id'],
            'user_id' => auth()->user()->id
        ]);

        return redirect('/browse');

    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
