<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Input IKPA</title>
    <link href="{{ asset('evanto/assets/icons/font-awesome/css/all.min.css') }}" rel="stylesheet">
<style>
    body { margin: 0; background: #eef3f9; }
    .content-body { min-height: 100vh; padding: 0; background: #eef3f9; }
    .ikpa-flow {
        --navy: #082a5c;
        --navy-deep: #061d43;
        --red: #f51f2b;
        --danger: #c5161d;
        --success: #138a36;
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
    .flow-brand strong { display: block; font-size: 1.34rem; font-weight: 900; line-height: 1; }
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
    .flow-logo img { width: 150px; max-width: 100%; height: auto; display: block; }
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
    .panel {
        margin-bottom: 20px;
        padding: 16px 18px;
        border: 1px solid #dce6f1;
        border-radius: 16px;
        background: rgba(255,255,255,.94);
        box-shadow: 0 10px 24px rgba(8,42,92,.08);
    }
    .panel header {
        display: flex;
        justify-content: space-between;
        gap: 16px;
        align-items: center;
        margin-bottom: 16px;
    }
    .panel-heading {
        display: flex;
        align-items: center;
        gap: 10px;
        margin: 0;
        color: #08173d;
        font-size: 1.05rem;
        font-weight: 900;
    }
    .create-grid {
        display: grid;
        grid-template-columns: minmax(160px, 1.1fr) repeat(7, minmax(96px, 1fr)) auto;
        gap: 10px;
        align-items: end;
    }
    .period-toolbar {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        align-items: end;
        justify-content: space-between;
    }
    .period-toolbar form {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        align-items: end;
    }
    .period-toolbar .field {
        min-width: 190px;
    }
    .period-badge {
        display: inline-flex;
        align-items: center;
        min-height: 38px;
        padding: 0 13px;
        border-radius: 999px;
        background: #eef5ff;
        color: #082a5c;
        font-size: .86rem;
        font-weight: 900;
    }
    .field label {
        display: block;
        margin-bottom: 6px;
        color: #667085;
        font-size: 11px;
        font-weight: 900;
    }
    input[type="text"],
    input[type="month"],
    input[type="number"] {
        width: 100%;
        min-height: 38px;
        border: 1px solid #d9dfe8;
        border-radius: 8px;
        padding: 8px 10px;
        color: #101828;
        font: inherit;
        font-weight: 800;
        background: #fff;
    }
    input[type="number"] { min-width: 72px; }
    .table-wrap { overflow-x: auto; border-radius: 10px; border: 1px solid #e5ebf3; }
    table {
        width: 100%;
        min-width: 1120px;
        border-collapse: collapse;
        font-size: 12px;
        background: #fff;
    }
    th, td {
        border-bottom: 1px solid #edf1f6;
        padding: 11px 8px;
        text-align: left;
        vertical-align: middle;
    }
    th {
        color: #344054;
        font-weight: 900;
        background: #f8fafc;
    }
    .actions {
        display: flex;
        gap: 8px;
        align-items: center;
    }
    .panel button {
        min-height: 38px;
        border: 0;
        border-radius: 8px;
        padding: 0 14px;
        background: #082a5c;
        color: #fff;
        font: inherit;
        font-weight: 900;
        cursor: pointer;
        white-space: nowrap;
    }
    .panel .danger-button { background: var(--danger); }
    .toast-wrap {
        position: fixed;
        top: 22px;
        right: 24px;
        z-index: 50;
        display: grid;
        gap: 12px;
        width: min(420px, calc(100vw - 32px));
    }
    .toast-pop {
        display: grid;
        grid-template-columns: 42px minmax(0, 1fr);
        gap: 12px;
        align-items: center;
        padding: 14px 16px;
        border: 1px solid rgba(148, 163, 184, .24);
        border-radius: 14px;
        background: rgba(255, 255, 255, .96);
        box-shadow: 0 20px 44px rgba(15, 23, 42, .16);
        animation: toast-in .28s ease-out both, toast-out .28s ease-in 5.5s forwards;
    }
    .toast-pop__icon {
        width: 42px;
        height: 42px;
        border-radius: 999px;
        display: grid;
        place-items: center;
        color: #fff;
        font-size: 20px;
        font-weight: 900;
    }
    .toast-pop__title { margin: 0 0 3px; color: #171821; font-size: 14px; font-weight: 900; }
    .toast-pop__message { margin: 0; color: #667085; font-size: 13px; font-weight: 700; line-height: 1.35; }
    .toast-pop.success .toast-pop__icon { background: var(--success); }
    .toast-pop.error .toast-pop__icon { background: var(--danger); }
    @keyframes toast-in {
        from { opacity: 0; transform: translate3d(16px, -8px, 0) scale(.98); }
        to { opacity: 1; transform: translate3d(0, 0, 0) scale(1); }
    }
    @keyframes toast-out {
        to { opacity: 0; transform: translate3d(16px, -8px, 0) scale(.98); visibility: hidden; }
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
        .create-grid { grid-template-columns: repeat(4, minmax(120px, 1fr)); }
    }
    @media (max-width: 1100px) {
        .flow-hero { padding-right: 28px; }
        .flow-brand { position: relative; top: auto; right: auto; margin-top: 18px; color: #09275a; }
        .flow-brand-mark { border-color: #0b448d; color: #0b448d; }
        .flow-body { grid-template-columns: 1fr; }
        .flow-sidebar { min-height: auto; }
        .create-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
    }
    @media (max-width: 720px) {
        .flow-hero { padding: 24px 18px 18px; }
        .flow-body { padding: 18px 12px 0; }
        .flow-nav { grid-template-columns: repeat(3, minmax(0, 1fr)); }
        .flow-nav a,
        .flow-nav button {
            min-height: 54px;
            grid-template-columns: 1fr;
            justify-items: center;
            gap: 5px;
            padding: 8px 6px;
            font-size: .84rem;
            text-align: center;
        }
        .flow-logo { margin-bottom: 16px; }
        .flow-illustration,
        .flow-sidebar-copy { display: none; }
        .flow-hero-logo { width: min(240px, 78vw); min-height: 54px; }
        .flow-hero-logo img { max-height: 62px; }
        .flow-title { font-size: 2.15rem; }
        .flow-subtitle { font-size: 1.1rem; }
        .flow-brand { grid-template-columns: 50px 1fr; }
        .flow-brand-mark { width: 48px; height: 48px; border-radius: 14px; font-size: 1.25rem; }
        .flow-brand strong { font-size: 1.25rem; }
        .panel { padding: 16px 12px; }
        .create-grid { grid-template-columns: 1fr; }
        .actions { align-items: stretch; flex-direction: column; }
        .actions form,
        .actions button { width: 100%; }
    }
</style>
</head>
<body>
    @if (session('status') || session('status_error') || $errors->any())
        <div class="toast-wrap" role="status" aria-live="polite">
            @if (session('status'))
                <div class="toast-pop success">
                    <div class="toast-pop__icon">OK</div>
                    <div>
                        <p class="toast-pop__title">Perubahan berhasil</p>
                        <p class="toast-pop__message">{{ session('status') }}</p>
                    </div>
                </div>
            @endif

            @if (session('status_error') || $errors->any())
                <div class="toast-pop error" role="alert">
                    <div class="toast-pop__icon">!</div>
                    <div>
                        <p class="toast-pop__title">Perubahan tidak berhasil</p>
                        <p class="toast-pop__message">{{ session('status_error') ?: 'Pastikan nama unit terisi dan semua nilai berada di rentang 0 sampai 100.' }}</p>
                    </div>
                </div>
            @endif
        </div>
    @endif

    <main class="content-body">
        <section class="ikpa-flow" aria-label="Input IKPA SIMPATI PRIMA">
            <header class="flow-hero">
                <div class="flow-hero-logo">
                    <img src="{{ asset('images/simpati-prima-logo.png') }}" alt="Simpati IKPA">
                </div>
                <div class="flow-brand" aria-label="Simpati Prima">
                    <div class="flow-brand-mark"><i class="fas fa-chart-line"></i></div>
                    <div>
                        <strong>SIMPATI PRIMA</strong>
                        <span>Sistem Informasi Monitoring dan Evaluasi Kinerja Pelaksanaan Anggaran</span>
                    </div>
                </div>
            </header>

            <div class="flow-body">
                @include('ikpa.partials.sidebar', ['activeMenu' => 'ikpa'])

                <div class="flow-main">
                    <section class="panel">
                        <header>
                            <h2 class="panel-heading"><i class="fas fa-calendar-alt"></i> Periode Nilai IKPA</h2>
                        </header>

                        <div class="period-toolbar">
                            <form method="GET" action="{{ route('ikpa.input') }}">
                                <div class="field">
                                    <label for="period-filter">Bulan Periode</label>
                                    <input id="period-filter" type="month" name="period" value="{{ $periodValue }}" required>
                                </div>
                                <button type="submit">Tampilkan</button>
                            </form>
                            <span class="period-badge">{{ $periodLabel }}</span>
                        </div>
                    </section>

                    <section class="panel">
                        <header>
                            <h2 class="panel-heading"><i class="fas fa-save"></i> Simpan Nilai Bulanan</h2>
                        </header>

                        <form method="post" action="{{ route('ikpa.scores.save') }}">
                            @csrf
                            <input type="hidden" name="period" value="{{ $periodValue }}">
                            <div class="table-wrap">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Unit</th>
                                            @foreach ($metrics as $label)
                                                <th>{{ $label }}</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($units as $unit)
                                            <tr>
                                                <td><strong>{{ $unit->name }}</strong></td>
                                                @foreach ($metrics as $key => $label)
                                                    <td>
                                                        <input type="number" name="units[{{ $unit->id }}][{{ $key }}]" min="0" max="100" value="{{ old("units.{$unit->id}.{$key}", $unit->{$key}) }}" required>
                                                    </td>
                                                @endforeach
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="{{ count($metrics) + 1 }}">Belum ada unit. Tambahkan unit di Master Data Unit.</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="field">
                                <button type="submit" style="margin-top: 16px;">Simpan Periode {{ $periodLabel }}</button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>

            <footer class="flow-footer">
                SIMPATI PRIMA - Transparan, Akuntabel, Terintegrasi untuk Kinerja Anggaran yang Optimal
            </footer>
        </section>
    </main>
</body>
</html>
