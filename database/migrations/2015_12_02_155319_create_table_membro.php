<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMembro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('tb_membros', function (Blueprint $table) {
            $table->increments('mem_codigo');
            $table->integer('usu_codigo')->unsigned();
            $table->integer('gru_codigo')->unsigned();
            $table->boolean('mem_tipo');
            $table->timestamps();

            $table->foreign('usu_codigo')->references('usu_codigo')->on('tb_usuarios');
            $table->foreign('gru_codigo')->references('gru_codigo')->on('tb_grupos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tb_membros');
    }
}
