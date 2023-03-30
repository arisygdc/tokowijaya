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
        Schema::create('recomendation', function (Blueprint $table) {
            $table->id();
            $table->string("pekerjaan")->nullable();
            $table->integer("usia")->nullable();
            $table->unsignedBigInteger("kode_barang");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recomendation');
    }
};
