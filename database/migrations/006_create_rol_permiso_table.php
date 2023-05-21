<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('rol_permiso', function (Blueprint $table) {
            $table->unsignedBigInteger('rol_id');
            $table->unsignedBigInteger('permiso_id');
            $table->timestamps();

            $table->foreign('rol_id')->references('id')
              ->on('roles');
            $table->foreign('permiso_id')->references('id')
              ->on('permisos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('rol_permiso');
    }
};
