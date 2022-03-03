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
        Schema::create('fornecedors', function (Blueprint $table) {
            $table->id();
            $table->string('nome' , 50);
            $table->string('endereco' , 100);
           // $table->unsignedBigInteger('id_produto');
            $table->timestamps();
        });

        //Schema::table('fornecedors', function (Blueprint $table) {
          //  $table->foreign('id_produto')->references('id')->on('produtos')->onDelete('cascade');  
        //});


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fornecedors');
    }
};
