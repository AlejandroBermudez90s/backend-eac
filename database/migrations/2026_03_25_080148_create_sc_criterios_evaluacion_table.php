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
        Schema::create('criterios_tareas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('situacion_competencia_id')->constrained('situaciones_competencia')->onDelete('cascade');
            $table->foreignId('criterio_evaluacion_id')->constrained('criterios_evaluacion')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('criterios_tareas');
    }
};
