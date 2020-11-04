<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas_servicio', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_tipo_serv');
            $table->unsignedBigInteger('id_cliente');
            $table->unsignedBigInteger('id_tarjeta');
            $table->date('fecha_inicio');
            $table->string('hora');
            $table->integer('iva');
            $table->double('total');
            $table->integer('status');
            $table->timestamps();
            $table->foreign('id_tipo_serv')->references('id')->on('tipos_servicios');
            $table->foreign('id_cliente')->references('id')->on('users');
            $table->foreign('id_tarjeta')->references('id')->on('tarjetas_cliente');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas_servicio');
    }
}
