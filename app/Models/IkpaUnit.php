<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class IkpaUnit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'revisi_dipa',
        'deviasi_halaman_iii_dipa',
        'penyerapan_anggaran',
        'belanja_kontraktual',
        'penyelesaian_tagihan',
        'pengelolaan_up_tup',
        'capaian_output',
    ];

    public const METRICS = [
        'revisi_dipa' => 'Revisi Dipa',
        'deviasi_halaman_iii_dipa' => 'Deviasi Halaman III DIPA',
        'penyerapan_anggaran' => 'Penyerapan Anggaran',
        'belanja_kontraktual' => 'Belanja Kontraktual',
        'penyelesaian_tagihan' => 'Penyelesaian Tagihan',
        'pengelolaan_up_tup' => 'Pengelolaan UP dan TUP',
        'capaian_output' => 'Capaian Output',
    ];

    public function scores(): HasMany
    {
        return $this->hasMany(IkpaUnitScore::class);
    }

    public function score(): int
    {
        $total = collect(array_keys(self::METRICS))
            ->sum(fn (string $metric) => (int) $this->{$metric});

        return (int) round($total / count(self::METRICS));
    }

    public function status(): string
    {
        $score = $this->score();

        if ($score <= 30) {
            return 'punishment';
        }

        if ($score <= 60) {
            return 'warning';
        }

        return 'aman';
    }
}
