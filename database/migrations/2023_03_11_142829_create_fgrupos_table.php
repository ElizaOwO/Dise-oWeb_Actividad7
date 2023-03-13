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
        Schema::create('fgrupos', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('id_profesor')->references('id')->on('Dprofesores')
            ->onDelete('cascade');
            $table->foreignId('id_curso')->references('id')->on('Bcursos')
            ->onDelete('cascade');
            $table->foreignId('id_tipoGrupo')->references('id')->on('Ctipo_grupos')
            ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fgrupos');
    }
};
