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
        Schema::create('menu_aurum_dining', function (Blueprint $table) {
            $table->id();
            $table->string('nama_menu');
            $table->text('deskripsi_menu');
            $table->integer('harga');
            $table->text('asset');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_aurum_dining');
    }
};
