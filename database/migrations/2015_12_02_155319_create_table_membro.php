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
            $table->integer('usu_codigo');
            $table->integer('gru_codigo');
            $table->boolean('mem_tipo');
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
        Schema::drop('tb_membros');
    }
}
