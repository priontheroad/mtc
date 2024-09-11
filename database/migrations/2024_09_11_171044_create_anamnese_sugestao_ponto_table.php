<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnamneseSugestaoPontoTable extends Migration
{
    /**
     * Execute the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anamnese_sugestao_ponto', function (Blueprint $table) {
            $table->id();
            $table->foreignId('anamnese_id')->constrained()->onDelete('cascade'); // Referência à tabela 'anamneses'
            $table->foreignId('sugestao_ponto_id')->constrained()->onDelete('cascade'); // Referência à tabela 'sugestao_pontos'
            $table->timestamps();
        });
    }

    /**
     * Reverses the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anamnese_sugestao_ponto');
    }
}
