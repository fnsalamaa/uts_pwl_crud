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
        Schema::create('inventorie', function (Blueprint $table) {
            $table->integer('kode_barang');
            $table->unique('kode_barang');
            $table->string('nama_barang');
            $table->string('kategori_barang');
            $table->integer('harga');
            $table->integer('qty');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventorie');
    }
};
