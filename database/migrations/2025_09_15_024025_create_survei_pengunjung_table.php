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
        Schema::create('survei_pengunjung', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 100);
            $table->string('nomor_telepon', 15);
            $table->text('deskripsi_web');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('survei_pengunjung');
    }
};
