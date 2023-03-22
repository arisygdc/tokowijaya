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
        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->unsignedBigInteger('kode_transaksi')->index();
            $table->unsignedBigInteger('kode_barang')->index();
            $table->integer('jumlah');
            $table->foreign('kode_transaksi')->references('id')->on('transaksi')->onDelete('cascade');
            $table->foreign('kode_barang')->references('id')->on('barang')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_transaksi');
    }
};
