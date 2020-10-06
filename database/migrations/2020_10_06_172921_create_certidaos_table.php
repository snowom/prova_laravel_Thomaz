<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertidaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certidaos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_tabeliao');
            $table->foreign('id_tabeliao')->references('id')->on('tabeliaos');
            $table->string('tipo_certidao', 30);
            $table->string('nome_envolvido_1', 30);
            $table->string('nome_envolvido_2', 30);
            $table->string('data_certidao', 30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certidaos');
    }
}
