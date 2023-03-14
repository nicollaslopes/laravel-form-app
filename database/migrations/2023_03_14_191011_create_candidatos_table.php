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
        Schema::create('candidatos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->string('telefone', 100);
            $table->string('email', 100);
            $table->string('cargo_desejado', 100);
            $table->string('escolaridade', 50);
            $table->text('observacoes');
            $table->string('arquivo');
            $table->date('data_criacao');
            $table->string('ip');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};

