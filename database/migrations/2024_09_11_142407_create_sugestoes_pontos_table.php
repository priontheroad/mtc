<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSugestoesPontosTable extends Migration
{
    public function up()
    {
        Schema::create('sugestoes_pontos', function (Blueprint $table) {
            $table->id();
            $table->string('ponto');
            $table->string('descricao')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sugestoes_pontos');
    }
}
