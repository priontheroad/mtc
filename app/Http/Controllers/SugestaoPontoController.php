<?php

namespace App\Http\Controllers;

use App\Models\SugestaoPonto;
use Illuminate\Http\Request;

class SugestaoPontoController extends Controller
{
    public function index()
    {
        return SugestaoPonto::all(); 
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ponto' => 'required|string|max:255',
            'descricao' => 'nullable|string',
        ]);

        $sugestaoPonto = SugestaoPonto::create($validatedData);

        return response()->json($sugestaoPonto, 201);
    }

    public function show($id)
    {
        $sugestaoPonto = SugestaoPonto::findOrFail($id); 
        return response()->json($sugestaoPonto);
    }

    public function update(Request $request, $id)
    {
        $sugestaoPonto = SugestaoPonto::findOrFail($id);

        $validatedData = $request->validate([
            'ponto' => 'required|string|max:255',
            'descricao' => 'nullable|string',
        ]);

        $sugestaoPonto->update($validatedData);

        return response()->json($sugestaoPonto);
    }

    public function destroy($id)
    {
        $sugestaoPonto = SugestaoPonto::findOrFail($id);
        $sugestaoPonto->delete();

        return response()->json(null, 204);
    }
}
