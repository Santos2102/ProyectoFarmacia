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
        Schema::create('miscalaneo', function (Blueprint $table) {
            $table->id();
            $table->string("nombre",255);
            $table->text("descripcion",255);
            $table->string("tipo",255);
            $table->string("marca",255);
            $table->float("precio");
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
        Schema::dropIfExists('miscalaneo');
    }
};
