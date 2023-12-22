<?php
declare(strict_types=1);
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('guilds', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('activa');
            $table->boolean('borrar');
            $table->string('dc')->nullable();
            $table->unsignedBigInteger('gm');
            $table->longText('informacion');
            $table->string('mensaje')->nullable();
            $table->string('nombre');
            $table->string('tg')->nullable();
            $table->unsignedBigInteger('uc_modifico')->nullable();
            $table->string('wh')->nullable();
            $table->foreign('gm')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('uc_modifico')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guilds');
    }
};
