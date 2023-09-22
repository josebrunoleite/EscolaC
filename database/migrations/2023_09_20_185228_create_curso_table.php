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
        Schema::create('curso', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('autor');
            $table->string('pagamento');
            $table->string('valor');
            $table->string('tipo');
            $table->string('codigoProd')->unique();
            $table->JSON('possui');
            $table->JSON('aula');
            $table->JSON('prova');
            $table->text('referencia')->nullable();
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curso');
    }
};
