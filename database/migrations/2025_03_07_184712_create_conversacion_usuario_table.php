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
        Schema::create('conversacion_usuario', function (Blueprint $table) {
            $table->unsignedBigInteger('conversacion_id');
            $table->unsignedBigInteger('idUsuario1');
            $table->unsignedBigInteger('idUsuario2');
            $table->string('nombre');
            $table->foreign('conversacion_id')->references('idConversacion')->on('conversaciones')->onDelete('cascade');
            $table->foreign('idUsuario1')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('idUsuario2')->references('id')->on('users')->onDelete('cascade');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conversacion_usuario');
    }
};
