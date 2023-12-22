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
        Schema::create('avatares', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('borrar')->default(false);
            $table->unsignedBigInteger('clase_id');
            $table->string('comentario')->nullable;
            $table->unsignedBigInteger('guild_id')->nullable;
            $table->boolean('main')->default(true);
            $table->string('nombre');
            $table->unsignedBigInteger('propietario');
            $table->string('rango')->nullable;
            $table->unsignedBigInteger('raza_id');
            $table->unsignedBigInteger('uc_modifico')->nullable();
            //
            $table->foreign('clase_id')->references('id')->on('clases')->onDelete('cascade');
            $table->foreign('guild_id')->references('id')->on('guilds')->onDelete('cascade');
            $table->foreign('propietario')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('raza_id')->references('id')->on('razas')->onDelete('cascade');
            $table->foreign('uc_modifico')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avatares');
    }
};
