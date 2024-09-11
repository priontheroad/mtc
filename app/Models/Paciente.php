<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = [
        'nome', 'nascimento', 'profissao', 'endereco', 'telefones', 'user_id'
    ];
}
