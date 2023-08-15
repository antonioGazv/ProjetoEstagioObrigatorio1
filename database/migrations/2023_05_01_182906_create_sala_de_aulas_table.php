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
        Schema::create('sala_de_aulas', function (Blueprint $table) {
            $table->String('NomeSala');
            $table->id('idSala');
            $table->integer('Capacidade');
            $table->String('Categoria');
            $table->String('Disponivel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sala_de_aulas');
    }
};
