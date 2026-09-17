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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 80);
            $table->decimal('valor',8 ,2);
            $table->date('praso_validade');
            $table->integer('qtd_atual');
            $table->string('cor');
            $table->decimal('peso_kg',8,3);
            $table->string('observacoes', 255);
            $table->unsignedBigInteger('categorias');
            $table->foreign('categorias')->references('id')->on('categorias');
            $table->integer('qtd_min');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
