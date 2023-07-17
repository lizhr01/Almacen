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
        Schema::create('ordendecompras', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->text('cantidad');
            $table->text('tipo');
            $table->text('nombre');
            $table->text('estadoE');
            $table->text('estadoP');
            $table->text('proveedor');
            $table->text('precio');
            $table->text('total');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ordendecompras');
    }
};
