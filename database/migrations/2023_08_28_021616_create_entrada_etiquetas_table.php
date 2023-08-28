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
        Schema::create('entrada_etiquetas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('entrada_id')->nullable()->references('id')->on('entradas');
            $table->foreignId('etiqueta_id')->nullable()->references('id')->on('etiquetas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entrada_etiquetas');
    }
};
