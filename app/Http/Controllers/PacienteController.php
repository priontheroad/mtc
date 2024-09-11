<?php

namespace App\Http\Controllers;

use App\Services\PacienteService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PacienteController extends Controller
{
    protected $pacienteService;

    public function __construct(PacienteService $pacienteService)
    {
        $this->pacienteService = $pacienteService;
    }

    public function index()
    {
        $user = Auth::user();
        return $user->pacientes;
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string',
            'nascimento' => 'required|date',
            'profissao' => 'nullable|string',
            'endereco' => 'nullable|string',
            'telefones' => 'nullable|string',
        ]);

        $paciente = $this->pacienteService->createPaciente($data);

        return response()->json($paciente, 201);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string',
            'nascimento' => 'required|date',
            'profissao' => 'nullable|string',
            'endereco' => 'nullable|string',
            'telefones' => 'nullable|string',
        ]);

        $user = Auth::user();
        $paciente = $user->pacientes()->create($validatedData); 

        return response()->json($paciente, 201);
    }

    public function show($id)
    {
        $user = Auth::user();
        $paciente = $user->pacientes()->findOrFail($id); // Encontra o paciente associado ao usuário

        return response()->json($paciente);
    }
}

