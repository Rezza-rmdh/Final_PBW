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
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->string('nama_obat');
            $table->text('komposisi')->nullable();
            $table->text('indikasi_umum')->nullable();
            $table->string('dosis')->nullable();
            $table->text('efek_samping')->nullable();
            $table->text('kontraindikasi')->nullable();
            $table->text('peringatan')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('gambar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicines');
    }
};
