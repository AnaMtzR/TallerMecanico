

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotosServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotos_servicio', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_servicio');
            $table->string('ruta');
            $table->integer('status');
            $table->timestamps();
            $table->foreign('id_servicio')->references('id')->on('tipos_servicios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fotos_servicio');
    }
}
