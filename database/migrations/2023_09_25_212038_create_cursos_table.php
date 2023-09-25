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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('liberado');
            $table->string('nome');
            $table->string('autor');
            $table->string('pagamento')->nullable();
            $table->string('valor');
            $table->string('tipo');
            $table->string('codigoProd')->nullable();
            $table->JSON('possui')->nullable();
            $table->JSON('aula')->nullable();
            $table->JSON('prova')->nullable();
            $table->string('duracio');
            $table->TEXT('img')->nullable();
            $table->text('referencia')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
