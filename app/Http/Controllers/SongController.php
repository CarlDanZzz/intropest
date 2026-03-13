<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index()
    {
        return Song::all();
    }

    public function show($id)
    {
        return Song::findOrFail($id);
    }

    public function store(Request $request)
    {
        $song = Song::create($request->all());

        return response()->json($song, 201);
    }

    public function update(Request $request, $id)
    {
        $song = Song::findOrFail($id);
        $song->update($request->all());

        return response()->json($song);
    }

    public function destroy($id)
    {
        Song::destroy($id);

        return response()->json(null, 204);
    }
}