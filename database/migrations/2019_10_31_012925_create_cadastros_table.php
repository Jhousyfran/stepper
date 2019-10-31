<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCadastrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('str_cpf', 11);
            $table->string('str_nome', 200);
            $table->date('dta_nascimento');
            $table->string('str_rua', 50);
            $table->string('str_numero', 10);
            $table->string('str_cep', 8);
            $table->string('str_cidade', 100);
            $table->string('str_estado', 2);
            $table->string('str_telefone_fixo', 10);
            $table->string('str_telefone_celular', 11);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cadastros');
    }
}
