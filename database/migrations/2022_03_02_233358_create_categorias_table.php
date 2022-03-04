<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('categoria');
            $table->timestamps();
        });

        //adicionar relacionamento com a tabela produtos

        Schema::table('produtos', function (Blueprint $table) {
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });

        //adicionar relacionamento com a tabela produtos_detalhes

        Schema::table('produtos_detalhes', function (Blueprint $table) {
            $table->unsignedBigInteger('categoria_id');
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //remover relacionamento com a tabela produtos_detalhes

        Schema::table('produtos_detalhes', function (Blueprint $table) {
            //remover fk
            $table->dropForeign('produtos_detalhes_categoria_id_foreign'); //[table]_[column]_foreign

            //remover coluna categoria_id
            $table->dropColumn('categoria_id');
        });
        //remover relacionamento com a tabela produtos_detalhes

        Schema::table('produtos', function (Blueprint $table) {
            //remover fk
            $table->dropForeign('produtos_categoria_id_foreign'); //[table]_[column]_foreign

            //remover coluna categoria_id
            $table->dropColumn('categoria_id');

        });
        

        Schema::dropIfExists('categorias');
    }
};
