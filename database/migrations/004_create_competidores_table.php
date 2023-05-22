<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('competidores', function (Blueprint $table) {
            $table->id();
            $table->string('legajo')->unique();
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('du', false, true);
            $table->date('fecha_nac');
            $table->string('pais_nombre');
            $table->string('email');
            $table->string('genero');
            $table->string('graduacion');
            $table->float('clasificacion', 5, 2, true);
            // agrega campo timestamp de fecha de eliminacion
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('pais_nombre')->references('nombre')
              ->on('paises');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('competidores');
    }

};