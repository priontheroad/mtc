<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anamnese extends Model
{
    use HasFactory;

    protected $fillable = [
        'paciente_id', 'nome', 'nascimento', 'profissao', 'endereco', 'telefones', 'queixa_principal',
        'nivel_dor', 'historico_medico', 'rotina_atividade_fisica', 'emocoes', 'data', 'sono_sonhos',
        'transpiracao_sensacao_termica', 'alimentacao_sabores', 'sede_ingestao_liquidos',
        'fezes_urina', 'sintomas_cabeca_face', 'ginecologia_andrologia', 'inspecao_geral',
        'pulso_lingua', 'palpacao_pontos', 'auscultacao_olfacao', 'sindrome_principio_tratamento',
        'tratamento_protocolo', 'relato_geral', 'reavaliacao', 'ficha_retorno'
    ];

    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    public function sugestaoPontos()
    {
        return $this->belongsToMany(SugestaoPonto::class, 'anamnese_sugestao_ponto')
                    ->withTimestamps();
    }
}
