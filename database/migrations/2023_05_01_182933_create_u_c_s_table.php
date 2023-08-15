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
        Schema::create('u_c_s', function (Blueprint $table) {
            $table->id('idUC');
            $table->String('NomeUC');
            $table->String('TipoUC');
            $table->integer('CargaHoraria');
            $table->integer('qtdAlunos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('u_c_s');
    }
};
