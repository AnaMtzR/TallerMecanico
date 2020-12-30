<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('ape_paterno');
            $table->string('ape_materno');
            $table->integer('edad');
            $table->char('genero');
            $table->unsignedBigInteger('id_tarjeta');
            $table->unsignedBigInteger('id_tipo_usuario');
            $table->unsignedBigInteger('id_entidad');
            $table->unsignedBigInteger('id_municipio');
            $table->string('direccion');
            $table->string('colonia');
            $table->integer('cp');
            $table->string('username');
            $table->string('correo');
            $table->string('psw');
            $table->integer('status');
            $table->timestamps();
            $table->foreign('id_tarjeta')->references('id')->on('tarjetas_cliente');
            $table->foreign('id_tipo_usuario')->references('id')->on('tipos_usuario');
            $table->foreign('id_entidad')->references('id')->on('entidades');
            $table->foreign('id_municipio')->references('id')->on('municipios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
