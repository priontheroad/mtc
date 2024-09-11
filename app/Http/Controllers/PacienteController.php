<?php

namespace App\Http\Controllers;

use App\Services\PacienteService;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    protected $pacienteService;

    public function __construct(PacienteService $pacienteService)
    {
        $this->pacienteService = $pacienteService;
    }

    public function index()
    {
        return response()->json($this->pacienteService->getAllPacientes());
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

    public function show($id)
    {
        return response()->json($this->pacienteService->getPacienteById($id));
    }
}

