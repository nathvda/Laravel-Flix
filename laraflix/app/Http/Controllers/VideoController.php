<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Profile;
use App\Models\MovieView;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('movies.index', ['profile' => Profile::find(session()->get('profile'))]);
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
        return view('videos.show', ['movie' => Video::find($id), 'profile' => Profile::find(session()->get('profile'))]);
    }

    public function watch(String $id, Request $request)
    {



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
