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
        Schema::create('nvkLoaiSanPham', function (Blueprint $table) {
            $table->id();
            $table->string('nvkMaLoai')->unique();
            $table->string('nvkTenLoai');
            $table->boolean('nvkTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nvkLoaiSanPham');
    }
};