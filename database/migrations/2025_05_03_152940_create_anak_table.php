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
        Schema::create('anak', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('nama');
            $table->unsignedBigInteger('id_orangtua');
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->string('jenis_kelamin');
            $table->foreign('id_orangtua')->references('id')->on('orangtua')->onDelete('cascade');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anaks');
    }
};
