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
        Schema::create('mensajes', function (Blueprint $table) {
            $table->id('idMensaje');
            $table->unsignedBigInteger('idConversacion');
            $table->unsignedBigInteger('idUsuario');
            $table->text('mensaje');
            $table->foreign('idConversacion')->references('idConversacion')->on('conversaciones')->onDelete('cascade');
            $table->foreign('idUsuario')->references('id')->on('users')->onDelete('cascade');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mensajes');
    }
};
