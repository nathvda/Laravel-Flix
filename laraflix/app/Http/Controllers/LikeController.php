<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Dislike;
use Illuminate\Http\Request;

class LikeController extends Controller
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
        Like::create([
            'movie_id' => $request['movie'],
            'profile_id' => $request['profile']

        ]);

        Dislike::where('movie_id',$request['movie'])->where('profile_id',$request['profile'])->delete();

        return redirect('/browse/' . $request['profile']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Like $like)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Like $like)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Like $like)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        Like::where('movie_id',$request['movie'])->where('profile_id',$request['profile'])->delete();

        return redirect('/browse/' . $request['profile']);
    }
}
