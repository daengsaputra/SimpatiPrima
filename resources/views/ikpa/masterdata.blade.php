<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Master Data Unit</title>
    <link href="{{ asset('evanto/assets/icons/font-awesome/css/all.min.css') }}" rel="stylesheet">
<style>
    body { margin: 0; background: #eef3f9; }
    .content-body { min-height: 100vh; padding: 0; background: #eef3f9; }
    .ikpa-flow {
        --red: #f51f2b;
        --danger: #c5161d;
        --success: #138a36;
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
    .flow-brand span { display: block; margin-top: 6px; max-width: 360px; font-size: .92rem; font-weight: 600; line-height: 1.25; }
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
    .flow-nav { display: grid; gap: 8px; margin: 0 8px; }
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
    .flow-illustration { margin: 22px auto 0; width: 174px; max-width: 88%; aspect-ratio: 1 / .88; border-radius: 18px; overflow: hidden; background: #06254f; box-shadow: inset 0 0 38px rgba(0,153,255,.18), 0 12px 24px rgba(0, 8, 27, .22); }
    .flow-illustration img { width: 100%; height: 100%; display: block; object-fit: cover; }
    .flow-sidebar-copy { margin: 24px 24px 0; font-size: .88rem; font-weight: 800; line-height: 1.55; text-transform: uppercase; }
    .flow-sidebar-copy:after { content: ""; display: block; width: 40px; height: 3px; margin-top: 10px; background: var(--red); border-radius: 999px; }
    .flow-main { min-width: 0; display: flex; flex-direction: column; }
    .panel {
        margin-bottom: 20px;
        padding: 16px 18px;
        border: 1px solid #dce6f1;
        border-radius: 16px;
        background: rgba(255,255,255,.94);
        box-shadow: 0 10px 24px rgba(8,42,92,.08);
    }
    .panel header { display: flex; justify-content: space-between; gap: 16px; align-items: center; margin-bottom: 16px; }
    .panel-heading { display: flex; align-items: center; gap: 10px; margin: 0; color: #08173d; font-size: 1.05rem; font-weight: 900; }
    .unit-create { display: grid; grid-template-columns: minmax(220px, 1fr) auto; gap: 10px; align-items: end; }
    .field label { display: block; margin-bottom: 6px; color: #667085; font-size: 11px; font-weight: 900; }
    input[type="text"] {
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
    .table-wrap { overflow-x: auto; border-radius: 10px; border: 1px solid #e5ebf3; }
    table { width: 100%; min-width: 620px; border-collapse: collapse; font-size: 13px; background: #fff; }
    th, td { border-bottom: 1px solid #edf1f6; padding: 11px 10px; text-align: left; vertical-align: middle; }
    th { color: #344054; font-weight: 900; background: #f8fafc; }
    .actions { display: flex; gap: 8px; align-items: center; }
    button {
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
    .danger-button { background: var(--danger); }
    .toast-wrap { position: fixed; top: 22px; right: 24px; z-index: 50; display: grid; gap: 12px; width: min(420px, calc(100vw - 32px)); }
    .toast-pop { display: grid; grid-template-columns: 42px minmax(0, 1fr); gap: 12px; align-items: center; padding: 14px 16px; border: 1px solid rgba(148, 163, 184, .24); border-radius: 14px; background: rgba(255, 255, 255, .96); box-shadow: 0 20px 44px rgba(15, 23, 42, .16); }
    .toast-pop__icon { width: 42px; height: 42px; border-radius: 999px; display: grid; place-items: center; color: #fff; font-size: 20px; font-weight: 900; }
    .toast-pop__title { margin: 0 0 3px; color: #171821; font-size: 14px; font-weight: 900; }
    .toast-pop__message { margin: 0; color: #667085; font-size: 13px; font-weight: 700; line-height: 1.35; }
    .toast-pop.success .toast-pop__icon { background: var(--success); }
    .toast-pop.error .toast-pop__icon { background: var(--danger); }
    .flow-footer { margin-top: 24px; min-height: 46px; display: flex; align-items: center; justify-content: center; padding: 12px 22px; background: linear-gradient(90deg, #062650, #08356f); color: #fff; font-size: .92rem; font-weight: 500; text-align: center; }
    @media (max-width: 1100px) {
        .flow-hero { padding-right: 28px; }
        .flow-brand { position: relative; top: auto; right: auto; margin-top: 18px; color: #09275a; }
        .flow-brand-mark { border-color: #0b448d; color: #0b448d; }
        .flow-body { grid-template-columns: 1fr; padding-inline: 22px; }
        .flow-sidebar { min-height: auto; }
    }
    @media (max-width: 720px) {
        .flow-hero { padding: 24px 18px 18px; }
        .flow-body { padding: 18px 12px 0; }
        .flow-nav { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        .flow-nav a,
        .flow-nav button { min-height: 54px; grid-template-columns: 1fr; justify-items: center; gap: 5px; padding: 8px 6px; font-size: .84rem; text-align: center; }
        .flow-illustration,
        .flow-sidebar-copy { display: none; }
        .flow-hero-logo { width: min(240px, 78vw); min-height: 54px; }
        .flow-hero-logo img { max-height: 62px; }
        .unit-create { grid-template-columns: 1fr; }
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
                        <p class="toast-pop__message">{{ session('status_error') ?: 'Pastikan nama unit terisi dan belum digunakan.' }}</p>
                    </div>
                </div>
            @endif
        </div>
    @endif

    <main class="content-body">
        <section class="ikpa-flow" aria-label="Master Data Unit SIMPATI PRIMA">
            <header class="flow-hero">
                <div class="flow-hero-logo">
                    <img src="{{ asset('images/simpati-prima-logo.png') }}" alt="Simpati IKPA">
                </div>
                <div class="flow-brand" aria-label="Simpati Prima">
                    <div class="flow-brand-mark"><i class="fas fa-database"></i></div>
                    <div>
                        <strong>MASTER DATA</strong>
                        <span>Kelola daftar unit sebelum mengisi nilai IKPA per bulan</span>
                    </div>
                </div>
            </header>

            <div class="flow-body">
                @include('ikpa.partials.sidebar', ['activeMenu' => 'masterdata'])

                <div class="flow-main">
                    <section class="panel">
                        <header>
                            <h2 class="panel-heading"><i class="fas fa-plus-circle"></i> Tambah Unit</h2>
                        </header>
                        <form class="unit-create" method="post" action="{{ route('ikpa.units.store') }}">
                            @csrf
                            <div class="field">
                                <label for="name">Nama Unit</label>
                                <input id="name" type="text" name="name" value="{{ old('name') }}" required>
                            </div>
                            <button type="submit">Tambah Unit</button>
                        </form>
                    </section>

                    <section class="panel">
                        <header>
                            <h2 class="panel-heading"><i class="fas fa-table"></i> Data Unit</h2>
                        </header>
                        <div class="table-wrap">
                            <table>
                                <thead>
                                    <tr>
                                        <th style="width:72px;">No</th>
                                        <th>Nama Unit</th>
                                        <th style="width:240px;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($units as $unit)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <input form="update-unit-{{ $unit->id }}" type="text" name="name" value="{{ old("units.{$unit->id}.name", $unit->name) }}" required>
                                            </td>
                                            <td>
                                                <div class="actions">
                                                    <form id="update-unit-{{ $unit->id }}" method="post" action="{{ route('ikpa.units.update', $unit) }}">
                                                        @csrf
                                                        @method('put')
                                                        <button type="submit">Simpan</button>
                                                    </form>
                                                    <form method="post" action="{{ route('ikpa.units.destroy', $unit) }}" onsubmit="return confirm(@json('Hapus unit ' . $unit->name . '? Nilai bulanan unit ini juga ikut terhapus.'))">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="danger-button" type="submit">Hapus</button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3">Belum ada data unit.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
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
