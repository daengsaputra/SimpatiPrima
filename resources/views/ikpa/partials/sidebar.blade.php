@php
    $activeMenu = $activeMenu ?? (request()->routeIs('dashboard') || request()->routeIs('home') ? 'dashboard' : 'ikpa');
@endphp

@auth
    @if (session('success'))
    <div class="flow-toast-wrap" role="status" aria-live="polite">
        <div class="flow-toast success">
            <i class="fas fa-check" aria-hidden="true"></i>
            <div>
                <strong>Berhasil login</strong>
                <span>{{ session('success') }}</span>
            </div>
        </div>
    </div>
    @endif
@endauth

<aside class="flow-sidebar" aria-label="Menu SIMPATI PRIMA">
    <nav class="flow-nav" aria-label="Menu utama">
        <a class="{{ $activeMenu === 'dashboard' ? 'active' : '' }}" href="{{ route('dashboard') }}">
            <i class="fas fa-th-large" aria-hidden="true"></i>
            <span>Dashboard</span>
        </a>
        <a class="{{ $activeMenu === 'ikpa' ? 'active' : '' }}" href="{{ auth()->check() ? route('ikpa.input') : '#login-modal' }}">
            <i class="fas fa-chart-bar" aria-hidden="true"></i>
            <span>Input IKPA</span>
        </a>
        <a class="{{ $activeMenu === 'masterdata' ? 'active' : '' }}" href="{{ auth()->check() ? route('ikpa.masterdata') : '#login-modal' }}">
            <i class="fas fa-database" aria-hidden="true"></i>
            <span>Master Data Unit</span>
        </a>
        @auth
            <form method="post" action="{{ route('logout') }}">
                @csrf
                <button type="submit">
                    <i class="fas fa-sign-out-alt" aria-hidden="true"></i>
                    <span>Logout</span>
                </button>
            </form>
        @else
            <a href="#login-modal">
                <i class="fas fa-sign-in-alt" aria-hidden="true"></i>
                <span>Login</span>
            </a>
        @endauth
    </nav>

    <div class="flow-illustration" aria-hidden="true">
        <img src="{{ asset('images/ikpa-flow-illustration.svg') }}" alt="">
    </div>
    <p class="flow-sidebar-copy">Data akurat<br>Proses cepat<br>Keputusan tepat<br>Kinerja optimal</p>
</aside>

@guest
    <div id="login-modal" class="login-modal {{ $errors->login->any() ? 'is-open' : '' }}" aria-labelledby="login-modal-title" role="dialog">
        <a class="login-modal__backdrop" href="#" aria-label="Tutup login"></a>
        <section class="login-modal__panel">
            <a class="login-modal__close" href="#" aria-label="Tutup login">
                <i class="fas fa-times" aria-hidden="true"></i>
            </a>
            <div class="login-modal__brand">
                <img src="{{ asset('images/simpati-prima-logo.png') }}" alt="Simpati Prima">
            </div>
            <h2 id="login-modal-title">LOGIN</h2>
            @if ($errors->login->any())
                <div class="login-modal__notice error" role="alert">
                    username dan password salah
                </div>
            @endif
            @if (session('success'))
                <div class="login-modal__notice success">
                    {{ session('success') }}
                </div>
            @endif
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label for="modal-login">Username atau Email</label>
                <input id="modal-login" type="text" name="login" value="{{ old('login') }}" autocomplete="username" required>

                <label for="modal-password">Password</label>
                <input id="modal-password" type="password" name="password" autocomplete="current-password" required>

                <label class="login-modal__check">
                    <input type="checkbox" name="remember" value="1">
                    <span>Ingat saya</span>
                </label>

                <button type="submit">Masuk</button>
            </form>
        </section>
    </div>

    <style>
        .login-modal {
            position: fixed;
            inset: 0;
            z-index: 9999;
            display: none;
            place-items: center;
            padding: 24px;
        }
        .login-modal:target,
        .login-modal.is-open { display: grid; }
        .login-modal__backdrop {
            position: absolute;
            inset: 0;
            background: rgba(6, 20, 45, .48);
            backdrop-filter: blur(10px);
        }
        .login-modal__panel {
            position: relative;
            z-index: 1;
            width: min(520px, 100%);
            padding: 34px;
            border: 1px solid rgba(255,255,255,.7);
            border-radius: 18px;
            background: rgba(255,255,255,.96);
            box-shadow: 0 30px 80px rgba(4, 20, 45, .32);
        }
        .login-modal__close {
            position: absolute;
            top: 16px;
            right: 16px;
            width: 38px;
            height: 38px;
            display: grid;
            place-items: center;
            border-radius: 999px;
            background: #eef3f9;
            color: #082a5c;
            text-decoration: none;
        }
        .login-modal__brand img {
            width: 178px;
            max-width: 70%;
            height: auto;
            display: block;
            margin: 0 auto 22px;
        }
        .login-modal h2 {
            margin: 0 0 12px;
            color: #082a5c;
            font-size: 1.65rem;
            font-weight: 900;
            text-align: center;
            letter-spacing: 0;
        }
        .login-modal__notice {
            margin: 0 0 18px;
            padding: 11px 13px;
            border-radius: 10px;
            font-size: .9rem;
            font-weight: 900;
            text-align: center;
        }
        .login-modal__notice.error {
            background: #fff1f1;
            color: #c5161d;
            border: 1px solid rgba(197, 22, 29, .18);
        }
        .login-modal__notice.success {
            background: #eefbf3;
            color: #138a36;
            border: 1px solid rgba(19, 138, 54, .18);
        }
        .login-modal form { display: grid; gap: 12px; }
        .login-modal label {
            color: #344054;
            font-size: .86rem;
            font-weight: 900;
        }
        .login-modal input[type="text"],
        .login-modal input[type="password"] {
            width: 100%;
            min-height: 48px;
            border: 1px solid #d8e1ee;
            border-radius: 10px;
            padding: 10px 13px;
            color: #101828;
            font: inherit;
            font-weight: 700;
        }
        .login-modal__check {
            display: flex;
            gap: 9px;
            align-items: center;
            margin: 2px 0 6px;
        }
        .login-modal__check input { width: 16px; height: 16px; }
        .login-modal button {
            min-height: 50px;
            border: 0;
            border-radius: 10px;
            background: linear-gradient(135deg, #ff161f, #f64b55);
            color: #fff;
            font: inherit;
            font-weight: 900;
            cursor: pointer;
            box-shadow: 0 14px 24px rgba(245,31,43,.2);
        }
        @media (max-width: 720px) {
            .login-modal { padding: 16px; }
            .login-modal__panel { padding: 26px 20px; }
            .login-modal h2 { font-size: 1.32rem; }
        }
    </style>
@endguest

<style>
    .flow-toast-wrap {
        position: fixed;
        top: 22px;
        right: 24px;
        z-index: 10000;
        display: grid;
        gap: 12px;
        width: min(430px, calc(100vw - 32px));
    }
    .flow-toast {
        display: grid;
        grid-template-columns: 42px minmax(0, 1fr);
        gap: 12px;
        align-items: center;
        padding: 14px 16px;
        border: 1px solid rgba(255,255,255,.72);
        border-radius: 14px;
        background: rgba(255,255,255,.97);
        box-shadow: 0 20px 44px rgba(15, 23, 42, .16);
        animation: flow-toast-in .26s ease-out both, flow-toast-out .26s ease-in 5.2s forwards;
    }
    .flow-toast i {
        width: 42px;
        height: 42px;
        display: grid;
        place-items: center;
        border-radius: 999px;
        color: #fff;
    }
    .flow-toast.success i { background: #138a36; }
    .flow-toast.error i { background: #c5161d; }
    .flow-toast strong {
        display: block;
        margin-bottom: 3px;
        color: #08173d;
        font-size: .95rem;
        font-weight: 900;
    }
    .flow-toast span {
        display: block;
        color: #475467;
        font-size: .84rem;
        font-weight: 700;
        line-height: 1.35;
    }
    @keyframes flow-toast-in {
        from { opacity: 0; transform: translate3d(16px, -8px, 0) scale(.98); }
        to { opacity: 1; transform: translate3d(0, 0, 0) scale(1); }
    }
    @keyframes flow-toast-out {
        to { opacity: 0; transform: translate3d(16px, -8px, 0) scale(.98); visibility: hidden; }
    }
</style>
