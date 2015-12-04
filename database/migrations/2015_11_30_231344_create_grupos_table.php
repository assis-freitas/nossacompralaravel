<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_grupos', function (Blueprint $table) {
            $table->increments('gru_codigo');
            $table->string('gru_nome');
            $table->integer('usu_codigo')->unsigned();
            $table->timestamps();
            $table->foreign('usu_codigo')->references('usu_codigo')->on('tb_usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tb_grupos');
    }
}
