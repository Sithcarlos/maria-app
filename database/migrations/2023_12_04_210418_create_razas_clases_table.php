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
        Schema::create('razas_clases', function (Blueprint $table) {
            $table->unsignedBigInteger('razas_id');
            $table->unsignedBigInteger('clases_id');
            $table->timestamps();
            $table->foreign('razas_id')->references('id')->on('razas')->onDelete('cascade');
            $table->foreign('clases_id')->references('id')->on('clases')->onDelete('cascade');
            $table->primary(['razas_id', 'clases_id']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('razas_clases');
    }
};
