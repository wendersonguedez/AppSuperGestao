<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('unidade', 5); /* cm, mm, kg, m */
            $table->string('descricao', 30);
            $table->timestamps();
        });

        /* criando um campo para receber a chave estrangeira e adicionando o relacionamento 1:N na tabela produtos */
        Schema::table('produtos', function (Blueprint $table) {
            $table->unsignedBigInteger('unidade_id'); /* chave estrangeira */
            $table->foreign('unidade_id')->references('id')->on('unidades'); /* criando o relacionamento */
        });

        /* adicionando o relacionamento 1:N na tabela produto_detalhes */
        Schema::table('produto_detalhes', function (Blueprint $table) {
            $table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        /* removendo o relacionamento da tabela produtos */
        Schema::table('produtos', function (Blueprint $table) {
            /* removendo a FK */
            $table->dropForeign('produtos_unidade_id_foreign'); // [table]_[column]_foreign ===> Padrão de remoção de uma FK no Laravel.

            /* removendo a coluna unidade_id */
            $table->dropColumn('unidade_id');
        });

        /* removendo o relacionamento da tabela produto_detalhes */
        Schema::table('produto_detalhes', function (Blueprint $table) {
            /* removendo a FK */
            $table->dropForeign('produto_detalhes_unidade_id_foreign'); // [table]_[column]_foreign

            /* removendo a coluna unidade_id */
            $table->dropColumn('unidade_id');
        });

        Schema::dropIfExists('unidades');
    }
}
