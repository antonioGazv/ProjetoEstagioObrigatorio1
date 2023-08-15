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
        Schema::create('ensalamentos', function (Blueprint $table) {
            $table->id('idEnsalamento');
            $table->foreignId('idUC')->constrained('u_c_s', 'idUC')->onDelete('cascade');
            $table->foreignId('idSala')->constrained('sala_de_aulas', 'idSala')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ensalamentos');
    }
};