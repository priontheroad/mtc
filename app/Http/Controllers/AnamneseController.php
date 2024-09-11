<?php

namespace App\Http\Controllers;

use App\Models\Anamnese;
use Illuminate\Http\Request;

class AnamneseController extends Controller
{
    public function index()
    {
        return Anamnese::all();
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'nascimento' => 'required|date',
            'profissao' => 'nullable|string|max:255',
            'endereco' => 'nullable|string|max:255',
            'telefones' => 'nullable|string',
            'queixa_principal' => 'nullable|string',
            'nivel_dor' => 'nullable|integer|min:1|max:10',
            'historico_medico_geral' => 'nullable|string',
            'rotina_atividade_fisica' => 'nullable|string',
            'emocoes' => 'nullable|string',
            'data' => 'nullable|date',
            'sono_sonhos' => 'nullable|string',
            'transpiracao_sensacao_termica' => 'nullable|string',
            'alimentacao_sabores' => 'nullable|string',
            'sede_ingestao_liquidos' => 'nullable|string',
            'fezes_urina' => 'nullable|string',
            'sintomas_cabeca_face' => 'nullable|string',
            'ginecologia_andrologia' => 'nullable|string',
            'inspecao_geral' => 'nullable|string',
            'pulso_lingua' => 'nullable|string',
            'palpacao_pontos' => 'nullable|string',
            'auscultacao_olfacao' => 'nullable|string',
            'sindrome_principio_tratamento' => 'nullable|string',
            'tratamento_protocolo' => 'nullable|string',
            'relato_geral' => 'nullable|string',
            'reavaliacao' => 'nullable|string',
        ]);

        $anamnese = Anamnese::create($validatedData);

        return response()->json($anamnese, 201);
    }

    public function show($id)
    {
        $anamnese = Anamnese::findOrFail($id);
        return response()->json($anamnese);
    }

    public function update(Request $request, $id)
    {
        $anamnese = Anamnese::findOrFail($id);

        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'nascimento' => 'required|date',
            'profissao' => 'nullable|string|max:255',
            'endereco' => 'nullable|string|max:255',
            'telefones' => 'nullable|string',
            'queixa_principal' => 'nullable|string',
            'nivel_dor' => 'nullable|integer|min:1|max:10',
            'historico_medico_geral' => 'nullable|string',
            'rotina_atividade_fisica' => 'nullable|string',
            'emocoes' => 'nullable|string',
            'data' => 'nullable|date',
            'sono_sonhos' => 'nullable|string',
            'transpiracao_sensacao_termica' => 'nullable|string',
            'alimentacao_sabores' => 'nullable|string',
            'sede_ingestao_liquidos' => 'nullable|string',
            'fezes_urina' => 'nullable|string',
            'sintomas_cabeca_face' => 'nullable|string',
            'ginecologia_andrologia' => 'nullable|string',
            'inspecao_geral' => 'nullable|string',
            'pulso_lingua' => 'nullable|string',
            'palpacao_pontos' => 'nullable|string',
            'auscultacao_olfacao' => 'nullable|string',
            'sindrome_principio_tratamento' => 'nullable|string',
            'tratamento_protocolo' => 'nullable|string',
            'relato_geral' => 'nullable|string',
            'reavaliacao' => 'nullable|string',
        ]);


        $anamnese->update($validatedData);

        return response()->json($anamnese);
    }

    public function destroy($id)
    {
        $anamnese = Anamnese::findOrFail($id);
        $anamnese->delete();

        return response()->json(null, 204);
    }
}
