<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movimientos', function (Blueprint $table) {
            $table->id();
            $table->string('numero_remolque', 24);
            $table->string('propietario_remolque', 56);
            $table->string('placas_remolque', 24);
            $table->unsignedTinyInteger('cantidad_dias_patio');
            $table->boolean('cruce_directo');
            $table->boolean('cerrado_extranjero');
            $table->text('observaciones')->nullable();
            $table->foreignId('id_tipo_remolque');
            $table->foreignId('id_linea_americana');
            $table->foreignId('id_cerca_decagps_origen');
            $table->foreignId('id_cerca_decagps_destino');
            $table->date('fecha');
            $table->time('hora');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimientos');
    }
};
