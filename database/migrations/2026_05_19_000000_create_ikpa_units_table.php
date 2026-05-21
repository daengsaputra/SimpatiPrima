<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ikpa_units', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedTinyInteger('revisi_dipa')->default(0);
            $table->unsignedTinyInteger('deviasi_halaman_iii_dipa')->default(0);
            $table->unsignedTinyInteger('penyerapan_anggaran')->default(0);
            $table->unsignedTinyInteger('belanja_kontraktual')->default(0);
            $table->unsignedTinyInteger('penyelesaian_tagihan')->default(0);
            $table->unsignedTinyInteger('pengelolaan_up_tup')->default(0);
            $table->unsignedTinyInteger('capaian_output')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ikpa_units');
    }
};
