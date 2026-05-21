<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Simpati Prima | IKPA</title>
    <style>
        :root {
            --bg: #f6f6f7;
            --surface: #ffffff;
            --ink: #171821;
            --muted: #8b8d98;
            --line: #dfdfe4;
            --red: #ff3b42;
            --yellow: #f5c400;
            --green: #34c759;
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

        .nav a.active {
            background: #f0f0f4;
            color: var(--ink);
            font-weight: 700;
        }

        .nav a:hover,
        .nav button:hover {
            background: #f6f6f8;
            color: var(--ink);
        }

        .workspace {
            background: var(--bg);
            min-width: 0;
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

        .content h2 {
            margin: 0 0 18px 7px;
            font-size: 20px;
            font-weight: 800;
        }

        .dashboard-grid {
            display: grid;
            grid-template-columns: minmax(0, 1fr) clamp(430px, 32vw, 560px);
            gap: 20px;
            align-items: start;
        }

        .unit-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(214px, 1fr));
            gap: 18px;
        }

        .unit-card {
            position: relative;
            min-height: 426px;
            background: var(--surface);
            border-radius: 12px;
            padding: 21px 20px 22px;
        }

        .unit-card h3 {
            margin: 0 0 42px;
            padding-bottom: 42px;
            border-bottom: 1px solid #ececef;
            font-size: 14px;
            font-weight: 800;
            line-height: 1.25;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .traffic {
            position: absolute;
            top: -16px;
            right: 18px;
            width: 34px;
            height: 82px;
            padding: 5px 6px;
            border-radius: 5px;
            background: linear-gradient(180deg, #151515, #030303);
            box-shadow: inset 0 0 0 2px #242424, 0 7px 12px rgba(0, 0, 0, .25);
            display: grid;
            gap: 4px;
        }

        .traffic:after {
            content: "";
            position: absolute;
            left: 13px;
            bottom: -12px;
            width: 8px;
            height: 12px;
            background: #151515;
        }

        .bulb {
            width: 22px;
            height: 22px;
            border-radius: 50%;
            background: #211;
            box-shadow: inset 0 0 7px rgba(255, 255, 255, .12);
            opacity: .45;
        }

        .bulb.red { background: #35090a; }
        .bulb.yellow { background: #322707; }
        .bulb.green { background: #06320f; }

        .traffic.punishment .red,
        .traffic.warning .yellow,
        .traffic.aman .green {
            animation: blink 1s infinite;
            opacity: 1;
        }

        .traffic.punishment .red {
            background: var(--red);
            box-shadow: 0 0 12px var(--red), inset 0 0 6px #fff;
        }

        .traffic.warning .yellow {
            background: var(--yellow);
            box-shadow: 0 0 12px var(--yellow), inset 0 0 6px #fff;
        }

        .traffic.aman .green {
            background: var(--green);
            box-shadow: 0 0 12px var(--green), inset 0 0 6px #fff;
        }

        @keyframes blink {
            0%, 48%, 100% { filter: brightness(1.2); }
            50%, 86% { filter: brightness(.45); }
        }

        .metric {
            display: grid;
            grid-template-columns: minmax(0, 1fr) 18px;
            gap: 10px;
            align-items: center;
            margin-top: 14px;
            font-size: 14px;
            font-weight: 700;
        }

        .metric-name {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }

        .arrow {
            font-size: 18px;
            line-height: 1;
            text-align: right;
        }

        .arrow.down { color: var(--red); }
        .arrow.up { color: var(--green); }

        .bar {
            grid-column: 1 / -1;
            height: 3px;
            overflow: hidden;
            background: #eeeeef;
            border-radius: 999px;
        }

        .bar span {
            display: block;
            height: 100%;
            border-radius: inherit;
        }

        .unit-card.punishment .bar span { background: var(--red); }
        .unit-card.warning .bar span { background: var(--yellow); }
        .unit-card.aman .bar span { background: var(--green); }

        .status-column {
            display: grid;
            gap: 52px;
        }

        .status-box {
            position: relative;
            min-height: 238px;
            border-radius: 16px;
            overflow: visible;
            color: #fff;
            box-shadow: 0 18px 34px rgba(15, 23, 42, .12);
        }

        .status-box .traffic {
            top: -42px;
            right: 24px;
            transform: scale(.72);
        }

        .status-title,
        .status-info,
        .status-list {
            padding: 12px 18px;
            font-size: 14px;
            font-weight: 700;
        }

        .status-title {
            min-height: 48px;
            padding-right: 72px;
            border-bottom: 1px solid rgba(255, 255, 255, .72);
            border-radius: 16px 16px 0 0;
            font-size: 15px;
            font-weight: 900;
            letter-spacing: .01em;
        }

        .status-info {
            margin: 14px 16px 8px;
            padding: 13px 14px;
            border: 1px solid rgba(255, 255, 255, .56);
            border-radius: 12px;
            background: rgba(255, 255, 255, .92);
            box-shadow: 0 12px 24px rgba(0, 0, 0, .14), inset 0 1px 0 rgba(255, 255, 255, .7);
            color: #171821;
            font-size: 13px;
            line-height: 1.35;
            overflow-wrap: anywhere;
            backdrop-filter: blur(10px);
        }

        .status-info::before {
            content: "INFO";
            display: block;
            width: max-content;
            margin: 0 0 6px;
            padding: 3px 8px;
            border-radius: 999px;
            background: rgba(23, 24, 33, .1);
            color: #fff;
            font-size: 10px;
            font-weight: 900;
            letter-spacing: .06em;
        }

        .status-info strong {
            display: block;
            color: #171821;
            font-size: 15px;
            font-weight: 900;
            line-height: 1.35;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .status-box.punishment .status-info::before { background: rgba(255, 59, 66, .18); color: #a80f16; }
        .status-box.warning .status-info::before { background: rgba(245, 196, 0, .24); color: #7b6200; }
        .status-box.aman .status-info::before { background: rgba(52, 199, 89, .18); color: #12652d; }

        .status-list {
            display: grid;
            gap: 9px;
            align-content: start;
            min-width: 0;
            padding-top: 10px;
            padding-bottom: 18px;
        }

        .status-list div {
            min-width: 0;
            overflow: hidden;
            line-height: 1.25;
            overflow-wrap: anywhere;
        }

        .status-box.punishment { background: var(--red); margin-top: 0; }
        .status-box.warning { background: var(--yellow); margin-top: 0; }
        .status-box.aman { background: var(--green); margin-top: 0; }

        @media (max-width: 1120px) {
            .app { grid-template-columns: 180px minmax(0, 1fr); }
            .dashboard-grid { grid-template-columns: 1fr; }
            .status-column {
                grid-template-columns: repeat(3, minmax(320px, 1fr));
                gap: 22px;
            }
            .status-box,
            .status-box.aman {
                min-height: 232px;
                margin-top: 34px;
            }
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
                grid-template-columns: repeat(4, minmax(0, 1fr));
                gap: 8px;
            }
            .nav a { padding: 10px 8px; text-align: center; }
            .unit-grid,
            .status-column { grid-template-columns: 1fr; }
            .status-column { gap: 34px; }
            .unit-card { min-height: auto; }
        }
    </style>
</head>
<body>
    <main class="app">
        <aside class="sidebar">
            <a class="brand" href="{{ route('ikpa.index') }}" aria-label="Simpati Prima">
                <img src="{{ asset('images/simpati-prima-logo.png') }}" alt="Simpati Prima">
            </a>
            <nav class="nav" aria-label="Menu utama">
                <a href="#">Dashboard</a>
                <a href="#">DIPA</a>
                <a href="#">Transaksi</a>
                <a class="active" href="{{ route('ikpa.index') }}">IKPA</a>
                <a href="{{ route('ikpa.input') }}">Input IKPA</a>
                @auth
                    <form method="post" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login', ['local' => 1]) }}">Login Lokal</a>
                @endauth
            </nav>
        </aside>

        <section class="workspace">
            <header class="topbar">
                <h1>Simpati Prima | IKPA</h1>
            </header>

            <div class="content">
                <h2>Data Unit</h2>

                <div class="dashboard-grid">
                    <section class="unit-grid" aria-label="Nilai unit">
                        @foreach ($units as $unit)
                            @php($status = $unit->status())
                            <article class="unit-card {{ $status }}">
                                <div class="traffic {{ $status }}" aria-label="Lampu {{ $status }}">
                                    <span class="bulb red"></span>
                                    <span class="bulb yellow"></span>
                                    <span class="bulb green"></span>
                                </div>
                                <h3>{{ $unit->name }}</h3>

                                @foreach ($metrics as $key => $label)
                                    @php($value = (int) $unit->{$key})
                                    <div class="metric">
                                        <span class="metric-name">{{ $label }} : {{ $value }}%</span>
                                        <span class="arrow {{ $value <= 60 ? 'down' : 'up' }}">{!! $value <= 60 ? '&#8600;' : '&#8599;' !!}</span>
                                        <span class="bar"><span style="width: {{ $value }}%"></span></span>
                                    </div>
                                @endforeach
                            </article>
                        @endforeach
                    </section>

                    <aside class="status-column" aria-label="Kategori unit">
                        @foreach ([
                            'punishment' => [
                                'title' => 'Punishment',
                                'info' => 'Harus menyelesaikan kewajiban SPJ',
                            ],
                            'warning' => [
                                'title' => 'Warning',
                                'info' => 'Dapat melanjutkan kegiatan dengan catatan',
                            ],
                            'aman' => [
                                'title' => 'Aman',
                                'info' => 'Lanjutkan',
                            ],
                        ] as $key => $statusMeta)
                            <section class="status-box {{ $key }}">
                                <div class="traffic {{ $key }}" aria-hidden="true">
                                    <span class="bulb red"></span>
                                    <span class="bulb yellow"></span>
                                    <span class="bulb green"></span>
                                </div>
                                <div class="status-title">{{ $statusMeta['title'] }}</div>
                                <div class="status-info"><strong>{{ $statusMeta['info'] }}</strong></div>
                                <div class="status-list">
                                    @forelse ($groups[$key] as $unit)
                                        <div title="{{ $unit->name }}">{{ $unit->name }}</div>
                                    @empty
                                        <div>-</div>
                                    @endforelse
                                </div>
                            </section>
                        @endforeach
                    </aside>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
