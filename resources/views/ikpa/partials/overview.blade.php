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
                <h2>Punishment <span class="ikpa-overview-count">{{ $overviewCounts['punishment'] }}</span></h2>
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
        </article>

        <article class="ikpa-overview-card warning">
            <div>
                <h2>Warning <span class="ikpa-overview-count">{{ $overviewCounts['warning'] }}</span></h2>
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
        </article>

        <article class="ikpa-overview-card appreciation">
            <div>
                <h2>Appreciation <span class="ikpa-overview-count">{{ $overviewCounts['aman'] }}</span></h2>
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
                <svg class="ikpa-performance-svg" viewBox="0 0 760 190" role="img" focusable="false">
                    <defs>
                        <linearGradient id="ikpa-area-blue" x1="0" y1="0" x2="0" y2="1">
                            <stop offset="0%" stop-color="#22d3ee" stop-opacity=".54" />
                            <stop offset="50%" stop-color="#0ea5e9" stop-opacity=".2" />
                            <stop offset="100%" stop-color="#0c4a6e" stop-opacity=".03" />
                        </linearGradient>
                        <linearGradient id="ikpa-area-gold" x1="0" y1="0" x2="0" y2="1">
                            <stop offset="0%" stop-color="#fbbf24" stop-opacity=".62" />
                            <stop offset="48%" stop-color="#f59e0b" stop-opacity=".24" />
                            <stop offset="100%" stop-color="#92400e" stop-opacity=".02" />
                        </linearGradient>
                        <linearGradient id="ikpa-line-cyan" x1="0" y1="0" x2="1" y2="0">
                            <stop offset="0%" stop-color="#38bdf8" />
                            <stop offset="28%" stop-color="#22d3ee" />
                            <stop offset="62%" stop-color="#06b6d4" />
                            <stop offset="100%" stop-color="#67e8f9" />
                        </linearGradient>
                        <linearGradient id="ikpa-line-gold" x1="0" y1="0" x2="1" y2="0">
                            <stop offset="0%" stop-color="#f59e0b" />
                            <stop offset="34%" stop-color="#fbbf24" />
                            <stop offset="68%" stop-color="#fde68a" />
                            <stop offset="100%" stop-color="#fbbf24" />
                        </linearGradient>
                        <filter id="ikpa-chart-glow" x="-14%" y="-52%" width="128%" height="204%">
                            <feGaussianBlur stdDeviation="6" result="blur1" />
                            <feGaussianBlur in="SourceGraphic" stdDeviation="2.5" result="blur2" />
                            <feMerge>
                                <feMergeNode in="blur1" />
                                <feMergeNode in="blur2" />
                                <feMergeNode in="SourceGraphic" />
                            </feMerge>
                        </filter>
                        <filter id="ikpa-dot-glow" x="-120%" y="-120%" width="340%" height="340%">
                            <feGaussianBlur stdDeviation="5" result="blur" />
                            <feMerge>
                                <feMergeNode in="blur" />
                                <feMergeNode in="SourceGraphic" />
                            </feMerge>
                        </filter>
                    </defs>
                    <line x1="0" y1="47" x2="760" y2="47" stroke="#38bdf8" stroke-width="0.4" stroke-dasharray="3 9" opacity="0.18" />
                    <line x1="0" y1="95" x2="760" y2="95" stroke="#38bdf8" stroke-width="0.4" stroke-dasharray="3 9" opacity="0.18" />
                    <line x1="0" y1="143" x2="760" y2="143" stroke="#38bdf8" stroke-width="0.4" stroke-dasharray="3 9" opacity="0.18" />
                    <path class="ikpa-area gold" d="M0 166 C50 150 78 124 125 130 C168 135 190 122 228 118 C288 112 304 70 352 54 C406 36 432 94 484 88 C546 82 568 38 620 24 C666 12 684 68 725 50 C744 42 746 14 760 12 L760 190 L0 190 Z" />
                    <path class="ikpa-area blue" d="M0 138 C46 132 72 96 118 72 C174 42 217 76 262 116 C314 162 364 134 414 102 C470 66 506 126 552 116 C612 102 632 58 682 66 C718 72 732 42 760 48 L760 190 L0 190 Z" />
                    <path class="ikpa-area violet" d="M0 160 C62 146 98 106 150 112 C202 118 218 150 270 146 C330 142 360 95 416 102 C474 108 494 150 540 138 C592 124 608 82 660 88 C708 94 722 62 760 58 L760 190 L0 190 Z" />
                    <path class="ikpa-line violet" d="M0 160 C62 146 98 106 150 112 C202 118 218 150 270 146 C330 142 360 95 416 102 C474 108 494 150 540 138 C592 124 608 82 660 88 C708 94 722 62 760 58" />
                    <path class="ikpa-line cyan" d="M0 138 C46 132 72 96 118 72 C174 42 217 76 262 116 C314 162 364 134 414 102 C470 66 506 126 552 116 C612 102 632 58 682 66 C718 72 732 42 760 48" />
                    <path class="ikpa-line gold" d="M0 166 C50 150 78 124 125 130 C168 135 190 122 228 118 C288 112 304 70 352 54 C406 36 432 94 484 88 C546 82 568 38 620 24 C666 12 684 68 725 50 C744 42 746 14 760 12" />
                    <g class="ikpa-chart-points">
                        <circle class="pulse-cyan" cx="118" cy="72" r="5" />
                        <circle class="pulse-cyan" cx="414" cy="102" r="5" />
                        <circle class="pulse-cyan" cx="682" cy="66" r="5" />
                        <circle class="pulse-gold" cx="352" cy="54" r="6" />
                        <circle class="pulse-gold" cx="620" cy="24" r="6" />
                        <circle class="pulse-violet" cx="150" cy="112" r="4" />
                        <circle class="pulse-violet" cx="552" cy="116" r="4" />
                        <circle class="cyan" cx="118" cy="72" r="5" />
                        <circle class="cyan" cx="414" cy="102" r="5" />
                        <circle class="cyan" cx="682" cy="66" r="5" />
                        <circle class="gold" cx="352" cy="54" r="6" />
                        <circle class="gold" cx="620" cy="24" r="6" />
                        <circle class="gold" cx="760" cy="12" r="6" />
                        <circle class="violet" cx="150" cy="112" r="4" />
                        <circle class="violet" cx="552" cy="116" r="4" />
                    </g>
                </svg>
            </div>
            <div class="ikpa-chart-metrics">
                <span><i class="fas fa-chart-pie"></i><b>Penyerapan Anggaran</b><strong>{{ $overviewAverage }}%</strong></span>
                <span><i class="fas fa-shield-alt"></i><b>Kualitas Belanja</b><strong>{{ $overviewSafePercent }}%</strong></span>
                <span><i class="fas fa-chart-line"></i><b>Disiplin Pelaksanaan</b><strong>{{ $overviewTotal }}</strong></span>
            </div>
        </article>
    </div>
</section>
