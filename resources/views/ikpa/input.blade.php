<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Input IKPA</title>
    <style>
        :root {
            --bg: #f6f6f7;
            --surface: #ffffff;
            --ink: #171821;
            --muted: #737680;
            --line: #dfdfe4;
            --danger: #c5161d;
            --success: #138a36;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            background: #f1f1f2;
            color: var(--ink);
            font-family: Sans-Serif;
        }

        .app {
            display: grid;
            grid-template-columns: 226px minmax(0, 1fr);
            min-height: 100vh;
            padding: 34px 20px 0;
        }

        .sidebar {
            background: var(--surface);
            border-right: 1px solid var(--line);
            padding: 29px 26px;
        }

        .brand {
            display: block;
            margin: 0 0 58px;
            width: 100%;
            max-width: 170px;
            height: 44px;
        }

        .brand img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: contain;
            object-position: left center;
        }

        .nav {
            display: grid;
            gap: 28px;
            color: #80828d;
            font-size: 12px;
        }

        .nav a {
            color: inherit;
            padding: 12px 16px;
            text-decoration: none;
            border-radius: 8px;
        }

        .nav form {
            margin: 0;
        }

        .nav button {
            width: 100%;
            border: 0;
            background: transparent;
            color: inherit;
            padding: 12px 16px;
            border-radius: 8px;
            font: inherit;
            text-align: left;
            cursor: pointer;
        }

        .nav a.active,
        .nav a:hover,
        .nav button:hover {
            background: #f0f0f4;
            color: var(--ink);
            font-weight: 700;
        }

        .workspace {
            min-width: 0;
            background: var(--bg);
        }

        .topbar {
            height: 82px;
            display: flex;
            align-items: center;
            padding: 0 27px;
            background: var(--surface);
            border-bottom: 1px solid var(--line);
        }

        .topbar h1 {
            margin: 0;
            font-size: 20px;
            font-weight: 800;
        }

        .content {
            padding: 20px 20px 42px;
        }

        .panel {
            margin-bottom: 20px;
            background: var(--surface);
            border-radius: 8px;
            padding: 18px;
            box-shadow: 0 1px 0 rgba(0, 0, 0, .03);
        }

        .panel header {
            display: flex;
            justify-content: space-between;
            gap: 16px;
            align-items: center;
            margin-bottom: 16px;
        }

        h2 {
            margin: 0;
            font-size: 18px;
            font-weight: 800;
        }

        .flash {
            color: var(--success);
            font-size: 13px;
            font-weight: 700;
        }

        .error {
            color: var(--danger);
            font-size: 13px;
            font-weight: 700;
        }

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

        .toast-pop__title {
            margin: 0 0 3px;
            color: var(--ink);
            font-size: 14px;
            font-weight: 900;
        }

        .toast-pop__message {
            margin: 0;
            color: var(--muted);
            font-size: 13px;
            font-weight: 700;
            line-height: 1.35;
        }

        .toast-pop.success .toast-pop__icon { background: var(--success); }
        .toast-pop.error .toast-pop__icon { background: var(--danger); }

        @keyframes toast-in {
            from { opacity: 0; transform: translate3d(16px, -8px, 0) scale(.98); }
            to { opacity: 1; transform: translate3d(0, 0, 0) scale(1); }
        }

        @keyframes toast-out {
            to { opacity: 0; transform: translate3d(16px, -8px, 0) scale(.98); visibility: hidden; }
        }

        .table-wrap {
            overflow-x: auto;
        }

        table {
            width: 100%;
            min-width: 1120px;
            border-collapse: collapse;
            font-size: 12px;
        }

        th, td {
            border-bottom: 1px solid #eeeeef;
            padding: 10px 8px;
            text-align: left;
            vertical-align: middle;
        }

        th {
            color: #60636e;
            font-weight: 800;
            background: #fafafa;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            min-height: 36px;
            border: 1px solid #d9dbe2;
            border-radius: 6px;
            padding: 8px 10px;
            font: inherit;
            font-weight: 700;
        }

        input[type="number"] {
            min-width: 72px;
        }

        .actions {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        button {
            min-height: 36px;
            border: 0;
            border-radius: 8px;
            padding: 0 14px;
            background: #171821;
            color: #fff;
            font: inherit;
            font-weight: 800;
            cursor: pointer;
            white-space: nowrap;
        }

        .danger-button {
            background: var(--danger);
        }

        .create-grid {
            display: grid;
            grid-template-columns: minmax(160px, 1.1fr) repeat(7, minmax(96px, 1fr)) auto;
            gap: 10px;
            align-items: end;
        }

        .field label {
            display: block;
            margin-bottom: 6px;
            color: var(--muted);
            font-size: 11px;
            font-weight: 800;
        }

        @media (max-width: 1120px) {
            .app { grid-template-columns: 180px minmax(0, 1fr); }
            .create-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        }

        @media (max-width: 860px) {
            .app {
                display: block;
                padding: 0;
            }

            .sidebar {
                border-right: 0;
                border-bottom: 1px solid var(--line);
            }

            .brand { margin-bottom: 20px; }

            .nav {
                grid-template-columns: repeat(3, minmax(0, 1fr));
                gap: 8px;
            }

            .nav a {
                padding: 10px 8px;
                text-align: center;
            }

            .create-grid { grid-template-columns: 1fr; }
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

    <main class="app">
        <aside class="sidebar">
            <a class="brand" href="{{ route('ikpa.index') }}" aria-label="Simpati Prima">
                <img src="{{ asset('images/simpati-prima-logo.png') }}" alt="Simpati Prima">
            </a>
            <nav class="nav" aria-label="Menu utama">
                <a href="#">Dashboard</a>
                <a href="#">DIPA</a>
                <a href="#">Transaksi</a>
                <a href="{{ route('ikpa.index') }}">IKPA</a>
                <a class="active" href="{{ route('ikpa.input') }}">Input IKPA</a>
                <form method="post" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </nav>
        </aside>

        <section class="workspace">
            <header class="topbar">
                <h1>Input Detail Nilai IKPA</h1>
            </header>

            <div class="content">
                <section class="panel">
                    <header>
                        <h2>Tambah Unit</h2>
                    </header>

                    <form class="create-grid" method="post" action="{{ route('ikpa.units.store') }}">
                        @csrf
                        <div class="field">
                            <label for="name">Unit</label>
                            <input id="name" type="text" name="name" value="{{ old('name') }}" required>
                        </div>

                        @foreach ($metrics as $key => $label)
                            <div class="field">
                                <label for="create-{{ $key }}">{{ $label }}</label>
                                <input id="create-{{ $key }}" type="number" name="{{ $key }}" min="0" max="100" value="{{ old($key, 0) }}" required>
                            </div>
                        @endforeach

                        <button type="submit">Tambah</button>
                    </form>
                </section>

                <section class="panel">
                    <header>
                        <h2>Kelola Unit</h2>
                    </header>

                    <div class="table-wrap">
                        <table>
                            <thead>
                                <tr>
                                    <th>Unit</th>
                                    @foreach ($metrics as $label)
                                        <th>{{ $label }}</th>
                                    @endforeach
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($units as $unit)
                                    <tr>
                                        <td>
                                            <input form="update-unit-{{ $unit->id }}" type="text" name="name" value="{{ old("units.{$unit->id}.name", $unit->name) }}" required>
                                        </td>
                                        @foreach ($metrics as $key => $label)
                                            <td>
                                                <input form="update-unit-{{ $unit->id }}" type="number" name="{{ $key }}" min="0" max="100" value="{{ old("units.{$unit->id}.{$key}", $unit->{$key}) }}" required>
                                            </td>
                                        @endforeach
                                        <td>
                                            <div class="actions">
                                                <form id="update-unit-{{ $unit->id }}" method="post" action="{{ route('ikpa.units.update', $unit) }}">
                                                    @csrf
                                                    @method('put')
                                                    <button type="submit">Simpan</button>
                                                </form>

                                                <form method="post" action="{{ route('ikpa.units.destroy', $unit) }}" onsubmit="return confirm(@json('Hapus unit ' . $unit->name . '?'))">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="danger-button" type="submit">Hapus</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="{{ count($metrics) + 2 }}">Belum ada data unit.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </section>
    </main>
</body>
</html>
