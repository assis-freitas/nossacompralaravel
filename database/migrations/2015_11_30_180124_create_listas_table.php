<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_listas', function (Blueprint $table) {
            $table->increments('lis_codigo');
            $table->integer('gru_codigo');
            $table->string('lis_nome');
            $table->date('lis_data_inicial');
            $table->date('lis_data_final');
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
        Schema::drop('tb_listas');
    }
}
