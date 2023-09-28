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
        Schema::create('viajes', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer("id_cliente");
            $table->integer("id_conductor");
            $table->dateTime("fecha_ini");
            $table->dateTime("fecha_fin")->nullable();
            $table->string("punto_partida");
            $table->string("punto_llegada")->nullable();
            $table->string("punto_inicio")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viajes');
    }
};
