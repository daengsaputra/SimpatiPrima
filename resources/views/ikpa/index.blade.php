<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simpati Prima | IKPA</title>
    <link href="{{ asset('evanto/assets/icons/font-awesome/css/all.min.css') }}" rel="stylesheet">
<style>
    body { margin: 0; background: #eef3f9; }
    .content-body { min-height: 100vh; padding: 0; background: #eef3f9; }
    .ikpa-flow {
        --navy: #082a5c;
        --navy-deep: #061d43;
        --red: #f51f2b;
        --yellow: #f7b900;
        --green: #11a94f;
        --line: #dfe7f0;
        min-height: 100vh;
        color: #08173d;
        background: #f4f8fc;
        overflow: hidden;
        font-family: "SFUIText-Regular", Arial, sans-serif;
        display: flex;
        flex-direction: column;
    }
    .ikpa-flow * { box-sizing: border-box; }
    .flow-hero {
        position: relative;
        min-height: 94px;
        padding: 18px 34px 12px;
        background: linear-gradient(100deg, #ffffff 0%, #f9fcff 64%, #083067 64%, #062653 100%);
        border-bottom: 5px solid #e7edf4;
        overflow: hidden;
    }
    .flow-hero:before,
    .flow-hero:after {
        content: "";
        position: absolute;
        top: -40px;
        right: 290px;
        width: 104px;
        height: 156px;
        background: #1494df;
        transform: skewX(-36deg);
        border-radius: 0 0 18px 18px;
    }
    .flow-hero:after { right: 238px; background: #061d43; }
    .flow-title {
        margin: 0;
        color: #09275a;
        font-size: clamp(1.8rem, 3.1vw, 3rem);
        font-weight: 900;
        letter-spacing: 0;
        line-height: .95;
    }
    .flow-hero-logo {
        width: min(300px, 46vw);
        min-height: 62px;
        display: flex;
        align-items: center;
    }
    .flow-hero-logo img {
        width: 100%;
        max-height: 78px;
        object-fit: contain;
        object-position: left center;
        display: block;
    }
    .flow-subtitle {
        margin: 8px 0 0;
        color: #0d4387;
        font-size: 1.08rem;
        font-weight: 500;
    }
    .flow-subtitle:after {
        content: "";
        display: block;
        width: 66px;
        height: 4px;
        margin-top: 8px;
        border-radius: 999px;
        background: #ffc400;
    }
    .flow-brand {
        position: absolute;
        top: 20px;
        right: 42px;
        display: grid;
        grid-template-columns: 52px minmax(0, 1fr);
        gap: 12px;
        align-items: center;
        color: #fff;
        z-index: 1;
    }
    .flow-brand-mark {
        width: 50px;
        height: 50px;
        border: 4px solid rgba(255,255,255,.8);
        border-radius: 18px;
        display: grid;
        place-items: center;
        background: rgba(255,255,255,.1);
        font-size: 1.35rem;
    }
    .flow-brand strong {
        display: block;
        font-size: 1.34rem;
        font-weight: 900;
        line-height: 1;
    }
    .flow-brand span {
        display: block;
        margin-top: 6px;
        max-width: 360px;
        font-size: .92rem;
        font-weight: 600;
        line-height: 1.25;
    }
    .flow-body {
        display: grid;
        grid-template-columns: 218px minmax(0, 1fr);
        gap: 20px;
        padding: 18px 28px 0;
        flex: 1;
        align-items: stretch;
    }
    .flow-sidebar {
        min-height: 0;
        padding: 22px 8px 18px;
        border-radius: 16px;
        background: linear-gradient(180deg, #06254f, #031a39);
        color: #fff;
        box-shadow: 0 14px 28px rgba(8, 42, 92, .24);
        overflow: hidden;
    }
    .flow-logo {
        display: block;
        margin: 0 18px 18px;
        padding-bottom: 16px;
        border-bottom: 1px solid rgba(255,255,255,.22);
    }
    .flow-logo img {
        width: 150px;
        max-width: 100%;
        height: auto;
        display: block;
    }
    .flow-nav {
        display: grid;
        gap: 8px;
        margin: 0 8px;
    }
    .flow-nav a,
    .flow-nav button {
        width: 100%;
        min-height: 48px;
        display: grid;
        grid-template-columns: 38px minmax(0, 1fr);
        gap: 12px;
        align-items: center;
        padding: 0 20px;
        border: 1px solid transparent;
        border-radius: 9px;
        background: transparent;
        color: #fff;
        font: inherit;
        font-size: .94rem;
        font-weight: 700;
        text-align: left;
        text-decoration: none;
        cursor: pointer;
    }
    .flow-nav a.active {
        background: linear-gradient(135deg, #ff161f, #f64b55);
        border-color: rgba(255,255,255,.42);
        box-shadow: inset 0 1px 0 rgba(255,255,255,.5), 0 12px 22px rgba(245,31,43,.25);
    }
    .flow-nav i { font-size: 1.4rem; text-align: center; }
    .flow-nav form { margin: 0; }
    .flow-nav a:hover,
    .flow-nav button:hover { background: rgba(255,255,255,.1); color: #fff; }
    .flow-illustration {
        margin: 22px auto 0;
        width: 174px;
        max-width: 88%;
        aspect-ratio: 1 / .88;
        border-radius: 18px;
        overflow: hidden;
        background: #06254f;
        box-shadow: inset 0 0 38px rgba(0,153,255,.18), 0 12px 24px rgba(0, 8, 27, .22);
    }
    .flow-illustration img {
        width: 100%;
        height: 100%;
        display: block;
        object-fit: cover;
    }
    .flow-sidebar-copy {
        margin: 24px 24px 0;
        font-size: .88rem;
        font-weight: 800;
        line-height: 1.55;
        text-transform: uppercase;
    }
    .flow-sidebar-copy:after {
        content: "";
        display: block;
        width: 40px;
        height: 3px;
        margin-top: 10px;
        background: var(--red);
        border-radius: 999px;
    }
    .flow-main {
        min-width: 0;
        display: flex;
        flex-direction: column;
    }
    .data-panel {
        display: grid;
        grid-template-columns: minmax(0, 1fr) clamp(320px, 24vw, 420px);
        gap: 20px;
        padding: 16px 18px 18px;
        border: 1px solid #dce6f1;
        border-radius: 16px;
        background: rgba(255,255,255,.92);
        box-shadow: 0 10px 24px rgba(8,42,92,.08);
        flex: 1;
    }
    .panel-heading {
        display: flex;
        align-items: center;
        gap: 10px;
        margin: 0 0 14px;
        color: #08173d;
        font-size: 1.08rem;
        font-weight: 900;
    }
    .panel-topline {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 14px;
    }
    .period-filter {
        display: flex;
        gap: 8px;
        align-items: center;
    }
    .period-filter input {
        min-height: 36px;
        border: 1px solid #d9dfe8;
        border-radius: 8px;
        padding: 7px 10px;
        color: #101828;
        font: inherit;
        font-weight: 800;
        background: #fff;
    }
    .period-filter button {
        min-height: 36px;
        border: 0;
        border-radius: 8px;
        padding: 0 12px;
        background: #082a5c;
        color: #fff;
        font: inherit;
        font-weight: 900;
        cursor: pointer;
    }
    .period-label {
        padding: 8px 12px;
        border-radius: 999px;
        background: #eef5ff;
        color: #082a5c;
        font-size: .8rem;
        font-weight: 900;
    }
    .unit-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(190px, 1fr));
        gap: 14px;
    }
    .unit-card {
        position: relative;
        min-height: 430px;
        padding: 28px 18px 102px;
        border: 1px solid #e1e8f0;
        border-radius: 12px;
        background: #fff;
        box-shadow: 0 10px 22px rgba(8,42,92,.06);
    }
    .unit-card h3 {
        margin: 0 0 22px;
        padding-bottom: 22px;
        padding-right: 56px;
        border-bottom: 2px solid #e9eef4;
        color: #09275a;
        font-size: 1.08rem;
        font-weight: 900;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .traffic {
        position: absolute;
        top: 14px;
        right: 18px;
        width: 36px;
        height: 76px;
        padding: 6px 7px;
        border-radius: 5px;
        background: linear-gradient(180deg, #161616, #050505);
        box-shadow: inset 0 0 0 3px #2a2a2a, 0 7px 11px rgba(0,0,0,.28);
        display: grid;
        gap: 5px;
    }
    .traffic:after {
        content: "";
        position: absolute;
        left: 14px;
        bottom: -12px;
        width: 10px;
        height: 12px;
        background: #151515;
    }
    .bulb {
        width: 22px;
        height: 17px;
        border-radius: 999px;
        opacity: .44;
        box-shadow: inset 0 0 7px rgba(255,255,255,.18);
    }
    .bulb.red { background: #4a0709; }
    .bulb.yellow { background: #4b3904; }
    .bulb.green { background: #043d16; }
    .traffic.punishment .red,
    .traffic.warning .yellow,
    .traffic.aman .green {
        opacity: 1;
        animation: flow-blink 1.1s infinite;
    }
    .traffic.punishment .red { background: #ff1b24; box-shadow: 0 0 12px #ff1b24, inset 0 0 7px #fff; }
    .traffic.warning .yellow { background: #ffc400; box-shadow: 0 0 12px #ffc400, inset 0 0 7px #fff; }
    .traffic.aman .green { background: #0fbc55; box-shadow: 0 0 12px #0fbc55, inset 0 0 7px #fff; }
    @keyframes flow-blink {
        0%, 48%, 100% { filter: brightness(1.12); }
        50%, 86% { filter: brightness(.52); }
    }
    .metric {
        display: grid;
        grid-template-columns: minmax(0, 1fr) 18px;
        gap: 10px;
        align-items: center;
        margin-top: 13px;
        font-size: .8rem;
        font-weight: 800;
    }
    .metric-name {
        color: #121b35;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .metric-arrow { text-align: right; font-size: 1rem; line-height: 1; }
    .metric-arrow.down { color: var(--red); }
    .metric-arrow.flat { color: #8a8f9a; }
    .metric-arrow.up { color: var(--green); }
    .bar {
        grid-column: 1 / -1;
        height: 3px;
        overflow: hidden;
        border-radius: 999px;
        background: #e7edf4;
    }
    .bar span { display: block; height: 100%; border-radius: inherit; }
    .unit-card.punishment .bar span { background: var(--red); }
    .unit-card.warning .bar span { background: var(--yellow); }
    .unit-card.aman .bar span { background: var(--green); }
    .total-card {
        position: absolute;
        left: 14px;
        right: 14px;
        bottom: 20px;
        min-height: 70px;
        display: grid;
        grid-template-columns: 46px minmax(0, 1fr) auto;
        gap: 12px;
        align-items: center;
        padding: 12px;
        border: 1px solid #dde6ef;
        border-radius: 10px;
        background: #fdfefe;
    }
    .total-icon {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        display: grid;
        place-items: center;
        color: #fff;
        font-size: 1.45rem;
    }
    .unit-card.punishment .total-icon { background: #0c4aa2; }
    .unit-card.warning .total-icon { background: #788087; }
    .unit-card.aman .total-icon { background: #14a052; }
    .total-label {
        margin: 0;
        color: #111a35;
        font-size: .72rem;
        font-weight: 900;
        text-transform: uppercase;
    }
    .total-score {
        margin: 2px 0 0;
        font-size: 1.38rem;
        font-weight: 900;
        line-height: 1;
    }
    .unit-card.punishment .total-score { color: var(--red); }
    .unit-card.warning .total-score { color: var(--yellow); }
    .unit-card.aman .total-score { color: var(--green); }
    .total-badge {
        min-width: 76px;
        padding: 7px 12px;
        border-radius: 999px;
        color: #fff;
        font-size: .72rem;
        font-weight: 900;
        text-align: center;
        text-transform: uppercase;
    }
    .unit-card.punishment .total-badge { background: var(--red); }
    .unit-card.warning .total-badge { background: var(--yellow); color: #152044; }
    .unit-card.aman .total-badge { background: var(--green); }
    .status-column {
        display: grid;
        gap: 10px;
        padding-top: 12px;
        align-content: start;
    }
    .status-box {
        position: relative;
        min-height: 66px;
        border-radius: 14px;
        color: #fff;
        overflow: visible;
        box-shadow: 0 16px 28px rgba(8,42,92,.16);
    }
    .status-box .traffic {
        top: 8px;
        right: 16px;
        transform: scale(.54);
        transform-origin: top right;
    }
    .status-title {
        min-height: 66px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        padding: 0 58px 0 16px;
        border-bottom: 1px solid rgba(255,255,255,.5);
        font-size: .9rem;
        font-weight: 900;
        text-transform: uppercase;
    }
    .status-toggle {
        width: 100%;
        min-height: 66px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 12px;
        border: 0;
        background: transparent;
        color: inherit;
        font: inherit;
        font-size: .86rem;
        font-weight: 900;
        text-align: left;
        text-transform: uppercase;
        cursor: pointer;
    }
    .status-toggle i {
        width: 24px;
        height: 24px;
        display: grid;
        place-items: center;
        border-radius: 999px;
        background: rgba(255,255,255,.18);
        transition: transform .18s ease, background .18s ease;
    }
    .status-box.is-open .status-toggle i {
        transform: rotate(180deg);
        background: rgba(255,255,255,.28);
    }
    .status-content {
        display: grid;
        grid-template-columns: minmax(0, 1fr);
        gap: 14px;
        align-items: center;
        max-height: 0;
        padding: 0 18px;
        overflow: hidden;
        transition: max-height .24s ease, padding .24s ease;
    }
    .status-box.is-open .status-content {
        max-height: none;
        padding: 10px 14px 12px;
        overflow: visible;
    }
    .status-content i { font-size: 2.4rem; line-height: 1; }
    .status-content p {
        margin: 0;
        font-size: .78rem;
        font-weight: 700;
        line-height: 1.3;
    }
    .status-units {
        display: grid;
        gap: 6px;
        margin-top: 8px;
        font-size: .74rem;
        opacity: .88;
        overflow-wrap: anywhere;
    }
    .status-unit-item {
        display: flex;
        align-items: center;
        gap: 8px;
        min-height: 28px;
        padding: 6px 8px;
        border-radius: 8px;
        background: rgba(255,255,255,.16);
        font-weight: 900;
        line-height: 1.2;
    }
    .status-unit-item i {
        flex: 0 0 auto;
        width: 18px;
        font-size: .76rem;
        opacity: .9;
    }
    .status-box.punishment { background: linear-gradient(145deg, #f51f2b, #f2222a); }
    .status-box.warning { background: linear-gradient(145deg, #f6ad00, #ffc30c); }
    .status-box.aman { background: linear-gradient(145deg, #0fae53, #0d9b49); }
    .feature-row {
        display: grid;
        grid-template-columns: repeat(5, minmax(130px, 1fr));
        gap: 14px;
        margin-top: 16px;
    }
    .feature {
        min-height: 58px;
        display: grid;
        grid-template-columns: 40px minmax(0, 1fr);
        gap: 12px;
        align-items: center;
        padding: 8px 14px;
        border: 1px solid #dce6f1;
        border-radius: 10px;
        background: #fff;
        color: #082a5c;
        box-shadow: 0 8px 18px rgba(8,42,92,.07);
    }
    .feature i { font-size: 1.55rem; text-align: center; }
    .feature strong {
        display: block;
        font-size: .82rem;
        font-weight: 900;
        text-transform: uppercase;
        line-height: 1.15;
    }
    .feature span {
        display: block;
        margin-top: 2px;
        font-size: .86rem;
        font-weight: 700;
        line-height: 1.15;
    }
    .flow-footer {
        margin-top: 24px;
        min-height: 46px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 12px 22px;
        background: linear-gradient(90deg, #062650, #08356f);
        color: #fff;
        font-size: .92rem;
        font-weight: 500;
        text-align: center;
    }
    @media (max-width: 1500px) {
        .flow-body { grid-template-columns: 210px minmax(0, 1fr); padding-inline: 22px; gap: 18px; }
        .data-panel { grid-template-columns: 1fr; }
        .status-column { grid-template-columns: repeat(3, minmax(220px, 1fr)); padding-top: 8px; }
        .feature-row { gap: 16px; }
    }
    @media (max-width: 1100px) {
        .flow-hero { padding-right: 28px; }
        .flow-brand { position: relative; top: auto; right: auto; margin-top: 18px; color: #09275a; }
        .flow-brand-mark { border-color: #0b448d; color: #0b448d; }
        .flow-body { grid-template-columns: 1fr; }
        .flow-sidebar { min-height: auto; }
        .unit-grid,
        .status-column,
        .feature-row { grid-template-columns: 1fr; }
        .unit-card { min-height: 430px; }
    }
    @media (max-width: 720px) {
        .flow-hero { padding: 24px 18px 18px; }
        .flow-body { padding: 18px 12px 0; }
        .flow-logo { margin-bottom: 16px; }
        .flow-illustration,
        .flow-sidebar-copy { display: none; }
        .data-panel { padding: 16px 12px; }
        .flow-hero-logo { width: min(240px, 78vw); min-height: 54px; }
        .flow-hero-logo img { max-height: 62px; }
        .flow-title { font-size: 2.15rem; }
        .flow-subtitle { font-size: 1.1rem; }
        .flow-brand { grid-template-columns: 50px 1fr; }
        .flow-brand-mark { width: 48px; height: 48px; border-radius: 14px; font-size: 1.25rem; }
        .flow-brand strong { font-size: 1.25rem; }
        .unit-card { min-height: 430px; }
        .total-card { grid-template-columns: 44px minmax(0, 1fr); }
        .total-badge { grid-column: 1 / -1; }
        .feature-row { gap: 12px; }
    }
</style>
@include('ikpa.partials.theme')
</head>
<body class="theme-dark" data-theme-version="dark" data-bs-theme="dark">
<main class="content-body">
    <section class="ikpa-flow" aria-label="IKPA SIMPATI PRIMA">
        <header class="flow-hero">
            @include('ikpa.partials.header')
        </header>
        @include('ikpa.partials.sidebar', ['activeMenu' => 'ikpa'])
        @include('ikpa.partials.overview')
        @include('ikpa.partials.running-notice')

        <div class="flow-body">
            <div class="flow-main">
                <section class="data-panel">
                    <div>
                        <div class="panel-topline">
                            <h2 class="panel-heading"><i class="fas fa-chart-bar"></i> Data Unit</h2>
                            <form class="period-filter" method="GET" action="{{ route('ikpa.index') }}">
                                <input type="month" name="period" value="{{ $periodValue }}" aria-label="Bulan periode">
                                <button type="submit">Tampilkan</button>
                                <span class="period-label">{{ $periodLabel }}</span>
                            </form>
                        </div>
                        <div class="unit-grid">
                            @foreach ($units as $unit)
                                @php
                                    $status = $unit->status();
                                    $score = $unit->score();
                                    $badge = ['punishment' => 'Rendah', 'warning' => 'Sedang', 'aman' => 'Tinggi'][$status] ?? 'Tinggi';
                                @endphp
                                <article class="unit-card {{ $status }}">
                                    <div class="traffic {{ $status }}" aria-label="Status {{ $badge }}">
                                        <span class="bulb red"></span>
                                        <span class="bulb yellow"></span>
                                        <span class="bulb green"></span>
                                    </div>
                                    <h3>{{ $unit->name }}</h3>

                                    @foreach ($metrics as $key => $label)
                                        @php
                                            $value = (int) $unit->{$key};
                                            $arrowClass = $value <= 30 ? 'down' : ($value <= 60 ? 'flat' : 'up');
                                            $arrow = $value <= 30 ? '&#8600;' : ($value <= 60 ? '&minus;' : '&#8599;');
                                        @endphp
                                        <div class="metric">
                                            <span class="metric-name">{{ $label }} : {{ $value }}%</span>
                                            <span class="metric-arrow {{ $arrowClass }}">{!! $arrow !!}</span>
                                            <span class="bar"><span style="width: {{ $value }}%"></span></span>
                                        </div>
                                    @endforeach

                                    <div class="total-card">
                                        <span class="total-icon"><i class="fas fa-chart-bar"></i></span>
                                        <div>
                                            <p class="total-label">Capaian Total</p>
                                            <p class="total-score">{{ $score }}%</p>
                                        </div>
                                        <span class="total-badge">{{ $badge }}</span>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    </div>

                    <aside class="status-column" aria-label="Kategori capaian">
                        @foreach ([
                            'punishment' => [
                                'title' => 'Punishment',
                                'icon' => 'fas fa-gavel',
                                'text' => 'Tindakan tegas atas kinerja yang tidak tercapai',
                            ],
                            'warning' => [
                                'title' => 'Warning',
                                'icon' => 'fas fa-exclamation-triangle',
                                'text' => 'Peringatan dini untuk perbaikan kinerja',
                            ],
                            'aman' => [
                                'title' => 'Appreciation',
                                'icon' => 'fas fa-award',
                                'text' => 'Apresiasi atas pencapaian kinerja optimal',
                            ],
                        ] as $key => $meta)
                            @php($groupCount = $groups[$key]->count())
                            <section class="status-box {{ $key }}">
                                <div class="traffic {{ $key }}" aria-hidden="true">
                                    <span class="bulb red"></span>
                                    <span class="bulb yellow"></span>
                                    <span class="bulb green"></span>
                                </div>
                                <div class="status-title">
                                    <button class="status-toggle" type="button" aria-expanded="false">
                                        <span class="status-toggle-label">
                                            <span>{{ $meta['title'] }}</span>
                                        </span>
                                        <span class="status-count-badge" aria-label="{{ $groupCount }} data">{{ $groupCount }}</span>
                                        <i class="fas fa-chevron-down" aria-hidden="true"></i>
                                    </button>
                                </div>
                                <div class="status-content">
                                    <p>
                                        {{ $meta['text'] }}
                                        <span class="status-units">
                                            @forelse ($groups[$key] as $groupUnit)
                                                <span class="status-unit-item"><i class="{{ $meta['icon'] }}" aria-hidden="true"></i>{{ $groupUnit->name }}</span>
                                            @empty
                                                <span class="status-unit-item"><i class="fas fa-minus" aria-hidden="true"></i>-</span>
                                            @endforelse
                                        </span>
                                    </p>
                                </div>
                            </section>
                        @endforeach
                    </aside>
                </section>

                <section class="feature-row" aria-label="Keunggulan sistem">
                    <div class="feature"><i class="fas fa-bullseye"></i><div><strong>Monitoring</strong><span>Real-time</span></div></div>
                    <div class="feature"><i class="fas fa-chart-line"></i><div><strong>Evaluasi</strong><span>Terukur</span></div></div>
                    <div class="feature"><i class="fas fa-shield-alt"></i><div><strong>Alert Dini</strong><span>Proaktif</span></div></div>
                    <div class="feature"><i class="fas fa-headset"></i><div><strong>Keputusan</strong><span>Tepat & Cepat</span></div></div>
                    <div class="feature"><i class="fas fa-trophy"></i><div><strong>Kinerja</strong><span>Optimal</span></div></div>
                </section>
            </div>
        </div>

    </section>
</main>
<script>
    document.querySelectorAll('.status-toggle').forEach((button) => {
        button.addEventListener('click', () => {
            const box = button.closest('.status-box');
            const isOpen = box.classList.toggle('is-open');
            button.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        });
    });
</script>
</body>
</html>
