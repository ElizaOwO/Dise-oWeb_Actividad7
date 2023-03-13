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
        Schema::create('gestudiantes', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('id_usuario')->references('id')->on('Ausuarios')
            ->onDelete('cascade');
            $table->foreignId('id_grupo')->references('id')->on('Fgrupos')
            ->onDelete('cascade');
            $table->string('nombre', 50);
            $table->string('apellidoP', 50);
            $table->string('apellidoM', 50);
            $table->date('FechaNacimiento');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gestudiantes');
    }
};
