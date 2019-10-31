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
            $table->string('str_nome', 200)->nullable();
            $table->date('dta_nascimento')->nullable();
            $table->string('str_rua', 50)->nullable();
            $table->string('str_numero', 10)->nullable();
            $table->string('str_cep', 8)->nullable();
            $table->string('str_cidade', 100)->nullable();
            $table->string('str_estado', 2)->nullable();
            $table->string('str_telefone_fixo', 10)->nullable();
            $table->string('str_telefone_celular', 11)->nullable();
            $table->integer('int_passo')->nullable();
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
