<?php

use App\Models\IkpaUnit;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ikpa_unit_scores', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ikpa_unit_id')->constrained('ikpa_units')->cascadeOnDelete();
            $table->date('period_month');
            $table->unsignedTinyInteger('revisi_dipa')->default(0);
            $table->unsignedTinyInteger('deviasi_halaman_iii_dipa')->default(0);
            $table->unsignedTinyInteger('penyerapan_anggaran')->default(0);
            $table->unsignedTinyInteger('belanja_kontraktual')->default(0);
            $table->unsignedTinyInteger('penyelesaian_tagihan')->default(0);
            $table->unsignedTinyInteger('pengelolaan_up_tup')->default(0);
            $table->unsignedTinyInteger('capaian_output')->default(0);
            $table->timestamps();

            $table->unique(['ikpa_unit_id', 'period_month']);
        });

        if (Schema::hasTable('ikpa_units')) {
            $now = now();
            $period = $now->copy()->startOfMonth()->toDateString();
            $rows = DB::table('ikpa_units')->orderBy('id')->get();

            foreach ($rows as $row) {
                DB::table('ikpa_unit_scores')->insert([
                    'ikpa_unit_id' => $row->id,
                    'period_month' => $period,
                    'revisi_dipa' => $row->revisi_dipa ?? 0,
                    'deviasi_halaman_iii_dipa' => $row->deviasi_halaman_iii_dipa ?? 0,
                    'penyerapan_anggaran' => $row->penyerapan_anggaran ?? 0,
                    'belanja_kontraktual' => $row->belanja_kontraktual ?? 0,
                    'penyelesaian_tagihan' => $row->penyelesaian_tagihan ?? 0,
                    'pengelolaan_up_tup' => $row->pengelolaan_up_tup ?? 0,
                    'capaian_output' => $row->capaian_output ?? 0,
                    'created_at' => $now,
                    'updated_at' => $now,
                ]);
            }
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('ikpa_unit_scores');
    }
};
