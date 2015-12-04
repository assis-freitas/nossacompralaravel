<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_items', function (Blueprint $table) {
            $table->increments('ite_codigo');
            $table->integer('lis_codigo')->unsigned();
            $table->string('ite_descricao');
            $table->decimal('ite_quantidade', 6, 2);
            $table->integer('ite_status');
            $table->timestamps();

            $table->foreign('lis_codigo')->references('lis_codigo')->on('tb_listas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tb_items');
    }
}
