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
        Schema::create('perkembangan_anak', function (Blueprint $table) {
            $table->id();
            $table->string('id_anak');
            $table->date('tanggal_posyandu');
            $table->decimal('berat_badan', 8, 2);
            $table->string('ket_tb');
            $table->decimal('tinggi_badan', 8, 2);
            $table->foreign('id_anak')->references('id')->on('anak')->onDelete('cascade');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perkembangan_anaks');
    }
};
