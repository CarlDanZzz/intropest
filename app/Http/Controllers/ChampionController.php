<?php

namespace App\Http\Controllers;

use App\Models\Champion;
use Illuminate\Http\Request;

class ChampionController extends Controller
{
    public function index()
    {
        return Champion::all();
    }

    public function show($id)
    {
        return Champion::findOrFail($id);
    }

    public function store(Request $request)
    {
        $champion = Champion::create($request->all());
        $request->validate([
    'nombre' => 'required|string',
    'rol' => 'required|in:Asesino,Mago,Tanque,Peleador,Tirador,Soporte',
    'linea' => 'required|in:Top,Jungla,Mid,Bot',
]);

        return response()->json($champion, 201);

    }

    public function update(Request $request, $id)
    {
    $champion = Champion::find($id);

    if (!$champion) {
        return response()->json(['message' => 'Not found'], 404);
    }

    $validated = $request->validate([
        'nombre' => 'required|string',
        'rol' => 'required|in:Asesino,Mago,Tanque,Peleador,Tirador,Soporte',
        'linea' => 'required|in:Top,Jungla,Mid,Bot',
    ]);

    $champion->update($validated);

    return response()->json($champion);
}

    public function destroy($id)
    {
        Champion::destroy($id);

        return response()->json(null, 204);
    }
}