<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnamnesesTable extends Migration
{
    public function up()
    {
        Schema::create('anamneses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paciente_id')->constrained()->onDelete('cascade');
            $table->string('queixa_principal');
            $table->integer('nivel_dor')->default(0);
            $table->text('historico_medico')->nullable();
            $table->text('rotina_atividade_fisica')->nullable();
            $table->text('emocoes')->nullable();
            $table->text('sono_sonhos')->nullable();
            $table->text('transpiracao_sensacao_termica')->nullable();
            $table->text('alimentacao_sabores')->nullable();
            $table->text('sede_ingestao_liquidos')->nullable();
            $table->text('fezes_urina')->nullable();
            $table->text('sintomas_cabeca_face')->nullable();
            $table->text('ginecologia_andrologia')->nullable();
            $table->text('inspecao_geral')->nullable();
            $table->string('cor_lingua')->nullable();
            $table->string('saburra_lingual')->nullable();
            $table->string('forma_lingua')->nullable();
            $table->text('observacoes_lingua')->nullable();
            $table->text('palpacao')->nullable();
            $table->text('auscultacao_olfacao')->nullable();
            $table->string('sindrome_tratamento')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('anamneses');
    }
}

