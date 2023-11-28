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
        Schema::create('drinks', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('nama');
            $table->text('deskripsi');
            $table->unsignedInteger('harga');
            $table->date('tgl_produksi');
            $table->date('tgl_kadaluwarsa');
           
            $table->unsignedInteger('kalori');
            $table->unsignedInteger('protein');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drinks');
    }
};
