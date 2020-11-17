<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarjetasClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarjetas_cliente', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_banco');
            $table->unsignedBigInteger('id_consorcio');
            $table->integer('no_tarjeta');
            $table->string('cvr');
            $table->integer('mes');
            $table->integer('anio');
            $table->integer('status');
            $table->timestamps();
            $table->foreign('id_banco')->references('id')->on('tipos_banco');
            $table->foreign('id_consorcio')->references('id')->on('tipos_consorcio');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarjetas_cliente');
    }
}
