<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicontrolados', function (Blueprint $table) {
            $table->id();
            $table->string("nombre",255);
            $table->text("descripcion",255);
            $table->string("laboratorio",255);
            $table->string("presentacion",255);
            $table->float("precio_unidad");
            $table->integer("Existencia");
            $table->string("receta_medica",255);
            $table->string("imagen");
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
        Schema::dropIfExists('medicontrolados');
    }
};
