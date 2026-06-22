@php
    $overviewUnits = collect($units ?? []);
    $overviewTotal = $overviewUnits->count();
    $overviewCounts = ['punishment' => 0, 'warning' => 0, 'aman' => 0];
    $overviewScores = [];

    foreach ($overviewUnits as $overviewUnit) {
        $overviewStatus = method_exists($overviewUnit, 'status') ? $overviewUnit->status() : 'aman';
        $overviewScore = method_exists($overviewUnit, 'score') ? (int) $overviewUnit->score() : 0;

        if (array_key_exists($overviewStatus, $overviewCounts)) {
            $overviewCounts[$overviewStatus]++;
        }

        $overviewScores[] = $overviewScore;
    }

    $overviewAverage = count($overviewScores) ? (int) round(array_sum($overviewScores) / count($overviewScores)) : 0;
    $overviewSafePercent = $overviewTotal ? (int) round(($overviewCounts['aman'] / $overviewTotal) * 100) : 0;
@endphp

<section class="ikpa-overview" aria-label="Ringkasan status IKPA">
    <div class="ikpa-overview-status">
        <article class="ikpa-overview-card punishment">
            <div>
                <h2>Punishment</h2>
                <div class="ikpa-overview-card__body">
                    <i class="fas fa-gavel" aria-hidden="true"></i>
                    <p>Tindakan tegas atas kinerja yang tidak tercapai</p>
                </div>
            </div>
            <div class="ikpa-overview-light punishment" aria-label="{{ $overviewCounts['punishment'] }} data punishment">
                <span class="red"></span>
                <span class="yellow"></span>
                <span class="green"></span>
            </div>
            <span class="ikpa-overview-count">{{ $overviewCounts['punishment'] }}</span>
        </article>

        <article class="ikpa-overview-card warning">
            <div>
                <h2>Warning</h2>
                <div class="ikpa-overview-card__body">
                    <i class="fas fa-exclamation-triangle" aria-hidden="true"></i>
                    <p>Peringatan dini untuk perbaikan kinerja</p>
                </div>
            </div>
            <div class="ikpa-overview-light warning" aria-label="{{ $overviewCounts['warning'] }} data warning">
                <span class="red"></span>
                <span class="yellow"></span>
                <span class="green"></span>
            </div>
            <span class="ikpa-overview-count">{{ $overviewCounts['warning'] }}</span>
        </article>

        <article class="ikpa-overview-card appreciation">
            <div>
                <h2>Appreciation</h2>
                <div class="ikpa-overview-card__body">
                    <i class="fas fa-award" aria-hidden="true"></i>
                    <p>Apresiasi atas pencapaian kinerja optimal</p>
                </div>
            </div>
            <div class="ikpa-overview-light aman" aria-label="{{ $overviewCounts['aman'] }} data appreciation">
                <span class="red"></span>
                <span class="yellow"></span>
                <span class="green"></span>
            </div>
            <span class="ikpa-overview-count">{{ $overviewCounts['aman'] }}</span>
        </article>
    </div>

    <div class="ikpa-overview-insights">
        <article class="ikpa-overview-meter">
            <h2>IKPA Hari Ini <small>(Jumlah per Tahun)</small></h2>
            <div class="ikpa-gauge" style="--score: {{ $overviewAverage }};" aria-label="Rata-rata IKPA {{ $overviewAverage }} persen">
                <div class="ikpa-gauge__dial">
                    <span class="ikpa-gauge__ticks"></span>
                    <span class="ikpa-gauge__needle"></span>
                    <span class="ikpa-gauge__hub"></span>
                    <strong>{{ $overviewAverage }}%</strong>
                    <small>{{ $overviewTotal }} data</small>
                </div>
            </div>
            <div class="ikpa-overview-points">
                <span><i class="fas fa-bullseye"></i><b>Monitoring Real-time</b><small>Pantau indikator IKPA secara cepat</small></span>
                <span><i class="fas fa-shield-alt"></i><b>Evaluasi Akurat</b><small>Analisis mendalam untuk keputusan tepat</small></span>
                <span><i class="fas fa-bolt"></i><b>Keputusan Strategis</b><small>Dukung pimpinan dalam pengambilan keputusan</small></span>
            </div>
        </article>

        <article class="ikpa-overview-chart">
            <h2>Ringkasan Kinerja</h2>
            <div class="ikpa-chart-lines" aria-hidden="true">
                <span class="chart-y-label top">14K</span>
                <span class="chart-y-label mid">7K</span>
                <span class="chart-y-label bottom">0B</span>
                <span class="chart-axis-label">Median of Bytes</span>
                <span class="chart-line teal"></span>
                <span class="chart-line coral"></span>
                <span class="chart-tooltip">Ringkasan kinerja IKPA</span>
            </div>
            <div class="ikpa-chart-metrics">
                <span><i class="fas fa-chart-pie"></i><b>Penyerapan Anggaran</b><strong>{{ $overviewAverage }}%</strong></span>
                <span><i class="fas fa-shield-alt"></i><b>Kualitas Belanja</b><strong>{{ $overviewSafePercent }}%</strong></span>
                <span><i class="fas fa-chart-line"></i><b>Disiplin Pelaksanaan</b><strong>{{ $overviewTotal }}</strong></span>
            </div>
        </article>
    </div>
</section>
