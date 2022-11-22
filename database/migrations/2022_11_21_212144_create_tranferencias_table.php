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
        Schema::create('tranferencias', function (Blueprint $table) {
            $table->id();
            $table->string('No_Placa');
            $table->string('Identidad_dueño_anterior');
            $table->string('Identidad_dueño_actual');
            $table->string('Precio');
            $table->string('Nombre_Abogado');
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
        Schema::dropIfExists('tranferencias');
    }
};
