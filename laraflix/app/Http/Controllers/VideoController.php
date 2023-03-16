<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\MovieView;
use Illuminate\Http\Request;

class VideoController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        return view('videos.show', ['movie' => Video::find($id)]);
    }

    public function watch(String $id, Request $request)
    {

        MovieView::create([
            "movie_id" => $id,
            "profile_id" => session()->get('profile')]);

        return view('videos.watch', ['movie' => Video::find($id)]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        //
    }
}
