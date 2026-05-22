<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class IkpaUnitScore extends Model
{
    use HasFactory;

    protected $fillable = [
        'ikpa_unit_id',
        'period_month',
        'revisi_dipa',
        'deviasi_halaman_iii_dipa',
        'penyerapan_anggaran',
        'belanja_kontraktual',
        'penyelesaian_tagihan',
        'pengelolaan_up_tup',
        'capaian_output',
    ];

    protected $casts = [
        'period_month' => 'date',
    ];

    public function unit(): BelongsTo
    {
        return $this->belongsTo(IkpaUnit::class, 'ikpa_unit_id');
    }
}
