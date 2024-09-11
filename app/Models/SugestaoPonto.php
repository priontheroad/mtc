<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SugestaoPonto extends Model
{
    use HasFactory;

    protected $table = 'sugestoes_pontos';

    protected $fillable = [
        'ponto',
        'descricao',
    ];
}
