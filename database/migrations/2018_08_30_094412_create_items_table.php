<?php

use Illuminate\Support\Facades\Schema;
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
        Schema::create('itens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo_comprador');
            $table->integer('codigo_vendedor');
            $table->integer('numero_item');
            $table->string('descricao');
            $table->double('quantidade');
            $table->integer('prazo_entrega_id')->nullable()->unsigned();

            $table->softDeletes();
            $table->timestamps();

            $table->foreign('prazo_entrega_id')->references('id')->on('prazo_entregas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
