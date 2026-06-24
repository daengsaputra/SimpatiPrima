<div class="deznav">
    <div class="deznav-scroll">
        @php
            $pageToggles = array_merge(
                \App\Models\SiteSetting::defaultPageToggles(),
                $adminPageToggles ?? []
            );
            $roleAccessMap = array_replace_recursive(
                \App\Models\SiteSetting::defaultRolePageAccess(),
                $rolePageAccessMap ?? []
            );
            $currentRole = auth()->user()?->role;
            $isSuperAdmin = auth()->user()?->role === \App\Models\User::ROLE_SUPER_ADMIN;
            $canSee = static function (string $key) use ($isSuperAdmin, $pageToggles, $roleAccessMap, $currentRole): bool {
                if ($isSuperAdmin) {
                    return true;
                }

                if (!($pageToggles[$key] ?? true)) {
                    return false;
                }

                if (!$currentRole) {
                    return true;
                }

                return (bool) ($roleAccessMap[$key][$currentRole] ?? true);
            };
        @endphp

        <a href="{{ route('dashboard') }}" class="simpati-prima-sidebar-logo" aria-label="Simpati Prima">
            <img src="{{ asset('images/simpati-prima-logo.png') }}" alt="Simpati Prima">
        </a>

        <ul class="metismenu simpati-prima-menu-list" id="menu">
            <li class="menu-title simpati-prima-menu-title">UTAMA</li>
            <li class="{{ request()->routeIs('dashboard') || request()->routeIs('home') ? 'mm-active' : '' }}">
                <a href="{{ route('dashboard') }}" class="ai-icon simpati-prima-menu-link {{ request()->routeIs('dashboard') || request()->routeIs('home') ? 'active' : '' }}" data-menu-label="Dashboard">
                    <i class="fas fa-gauge-high"></i>
                    <span class="nav-text"><span class="simpati-prima-menu-label">Dashboard</span></span>
                    <i class="fa fa-angle-right simpati-prima-menu-arrow"></i>
                </a>
            </li>

            <li class="menu-title simpati-prima-menu-title">PENGATURAN</li>
            @if($canSee('assets_loanable'))
                <li class="{{ request()->routeIs('assets.loanable') ? 'mm-active' : '' }}">
                    <a href="{{ route('assets.loanable') }}" class="ai-icon simpati-prima-menu-link {{ request()->routeIs('assets.loanable') ? 'active' : '' }}" data-menu-label="Data Barang">
                        <i class="fas fa-boxes-stacked"></i>
                        <span class="nav-text">
                            <span class="simpati-prima-menu-label">Data Barang</span>
                            @if($isSuperAdmin && !($pageToggles['assets_loanable'] ?? true))
                                <span class="simpati-prima-menu-state">Nonaktif</span>
                            @endif
                        </span>
                        <i class="fa fa-angle-right simpati-prima-menu-arrow"></i>
                    </a>
                </li>
            @endif
            @if($canSee('assets_inventory'))
                <li class="{{ request()->routeIs('assets.index') ? 'mm-active' : '' }}">
                    <a href="{{ route('assets.index') }}" class="ai-icon simpati-prima-menu-link {{ request()->routeIs('assets.index') ? 'active' : '' }}" data-menu-label="Data Aset">
                        <i class="fas fa-cubes"></i>
                        <span class="nav-text">
                            <span class="simpati-prima-menu-label">Data Aset</span>
                            @if($isSuperAdmin && !($pageToggles['assets_inventory'] ?? true))
                                <span class="simpati-prima-menu-state">Nonaktif</span>
                            @endif
                        </span>
                        <i class="fa fa-angle-right simpati-prima-menu-arrow"></i>
                    </a>
                </li>
            @endif

            <li class="menu-title simpati-prima-menu-title">OPERASIONAL</li>
            @if($canSee('loans'))
                <li class="{{ request()->routeIs('loans.*') ? 'mm-active' : '' }}">
                    <a href="{{ route('loans.index') }}" class="ai-icon simpati-prima-menu-link {{ request()->routeIs('loans.*') ? 'active' : '' }}" data-menu-label="Peminjaman">
                        <i class="fas fa-handshake"></i>
                        <span class="nav-text">
                            <span class="simpati-prima-menu-label">Peminjaman</span>
                            @if($isSuperAdmin && !($pageToggles['loans'] ?? true))
                                <span class="simpati-prima-menu-state">Nonaktif</span>
                            @endif
                        </span>
                        <i class="fa fa-angle-right simpati-prima-menu-arrow"></i>
                    </a>
                </li>
            @endif
            @if($canSee('reports'))
                <li class="{{ request()->routeIs('reports.*') ? 'mm-active' : '' }}">
                    <a href="{{ route('reports.index') }}" class="ai-icon simpati-prima-menu-link {{ request()->routeIs('reports.*') ? 'active' : '' }}" data-menu-label="Laporan">
                        <i class="fas fa-chart-column"></i>
                        <span class="nav-text">
                            <span class="simpati-prima-menu-label">Laporan</span>
                            @if($isSuperAdmin && !($pageToggles['reports'] ?? true))
                                <span class="simpati-prima-menu-state">Nonaktif</span>
                            @endif
                        </span>
                        <i class="fa fa-angle-right simpati-prima-menu-arrow"></i>
                    </a>
                </li>
            @endif

            <li class="menu-title simpati-prima-menu-title">ADMINISTRASI</li>
            @if($canSee('users'))
                <li class="{{ request()->routeIs('users.*') ? 'mm-active' : '' }}">
                    <a href="{{ route('users.index') }}" class="ai-icon simpati-prima-menu-link {{ request()->routeIs('users.*') ? 'active' : '' }}" data-menu-label="Daftar Anggota">
                        <i class="fas fa-users-gear"></i>
                        <span class="nav-text">
                            <span class="simpati-prima-menu-label">Daftar Anggota</span>
                            @if($isSuperAdmin && !($pageToggles['users'] ?? true))
                                <span class="simpati-prima-menu-state">Nonaktif</span>
                            @endif
                        </span>
                        <i class="fa fa-angle-right simpati-prima-menu-arrow"></i>
                    </a>
                </li>
            @endif
            @if($isSuperAdmin)
                <li class="{{ request()->routeIs('settings.admin-menu*') ? 'mm-active' : '' }}">
                    <a href="{{ route('settings.admin-menu') }}" class="ai-icon simpati-prima-menu-link {{ request()->routeIs('settings.admin-menu*') ? 'active' : '' }}" data-menu-label="Pengaturan Super Admin">
                        <i class="fas fa-shield-halved"></i>
                        <span class="nav-text"><span class="simpati-prima-menu-label">Pengaturan Super Admin</span></span>
                        <i class="fa fa-angle-right simpati-prima-menu-arrow"></i>
                    </a>
                </li>
            @endif
        </ul>

        <div class="deznav-footer">
            <h6 class="simpati-prima-menu-title mb-3">LOGOUT</h6>
            <a href="{{ route('logout') }}" class="btn simpati-prima-logout-btn w-100"
               onclick="event.preventDefault(); document.getElementById('logout-form-sidebar').submit();">
                <i class="flaticon-381-turn-off me-2"></i> Keluar
            </a>
            <form id="logout-form-sidebar" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </div>
</div>

{{-- ===== Mobile Bottom Sheet Navigation ===== --}}
<div class="sp-mobile-backdrop" id="spMobileBackdrop" aria-hidden="true"></div>
<div class="sp-mobile-sheet" id="spMobileSheet" role="dialog" aria-modal="true" aria-label="Menu Navigasi">
    <div class="sp-mobile-sheet__handle"></div>
    <div class="sp-mobile-sheet__header">
        <img src="{{ asset('images/simpati-prima-logo.png') }}" alt="Simpati Prima" class="sp-mobile-sheet__logo">
        <button class="sp-mobile-sheet__close" id="spMobileClose" aria-label="Tutup menu" type="button">
            <i class="fas fa-times"></i>
        </button>
    </div>
    <nav class="sp-mobile-sheet__nav" aria-label="Menu utama">
        <a href="{{ route('dashboard') }}" class="sp-mobile-nav-item {{ request()->routeIs('dashboard') || request()->routeIs('home') ? 'is-active' : '' }}">
            <span class="sp-mobile-nav-icon"><i class="fas fa-gauge-high"></i></span>
            <span class="sp-mobile-nav-label">Dashboard</span>
        </a>
        @if($canSee('assets_loanable'))
        <a href="{{ route('assets.loanable') }}" class="sp-mobile-nav-item {{ request()->routeIs('assets.loanable') ? 'is-active' : '' }}">
            <span class="sp-mobile-nav-icon"><i class="fas fa-boxes-stacked"></i></span>
            <span class="sp-mobile-nav-label">Data Barang</span>
        </a>
        @endif
        @if($canSee('assets_inventory'))
        <a href="{{ route('assets.index') }}" class="sp-mobile-nav-item {{ request()->routeIs('assets.index') ? 'is-active' : '' }}">
            <span class="sp-mobile-nav-icon"><i class="fas fa-cubes"></i></span>
            <span class="sp-mobile-nav-label">Data Aset</span>
        </a>
        @endif
        @if($canSee('loans'))
        <a href="{{ route('loans.index') }}" class="sp-mobile-nav-item {{ request()->routeIs('loans.*') ? 'is-active' : '' }}">
            <span class="sp-mobile-nav-icon"><i class="fas fa-handshake"></i></span>
            <span class="sp-mobile-nav-label">Peminjaman</span>
        </a>
        @endif
        @if($canSee('reports'))
        <a href="{{ route('reports.index') }}" class="sp-mobile-nav-item {{ request()->routeIs('reports.*') ? 'is-active' : '' }}">
            <span class="sp-mobile-nav-icon"><i class="fas fa-chart-column"></i></span>
            <span class="sp-mobile-nav-label">Laporan</span>
        </a>
        @endif
        @if($canSee('users'))
        <a href="{{ route('users.index') }}" class="sp-mobile-nav-item {{ request()->routeIs('users.*') ? 'is-active' : '' }}">
            <span class="sp-mobile-nav-icon"><i class="fas fa-users-gear"></i></span>
            <span class="sp-mobile-nav-label">Anggota</span>
        </a>
        @endif
        @if($isSuperAdmin)
        <a href="{{ route('settings.admin-menu') }}" class="sp-mobile-nav-item {{ request()->routeIs('settings.admin-menu*') ? 'is-active' : '' }}">
            <span class="sp-mobile-nav-icon"><i class="fas fa-shield-halved"></i></span>
            <span class="sp-mobile-nav-label">Super Admin</span>
        </a>
        @endif
        <a href="{{ route('logout') }}" class="sp-mobile-nav-item sp-mobile-nav-item--logout"
           onclick="event.preventDefault(); document.getElementById('sp-logout-mobile').submit();">
            <span class="sp-mobile-nav-icon"><i class="fas fa-sign-out-alt"></i></span>
            <span class="sp-mobile-nav-label">Keluar</span>
        </a>
        <form id="sp-logout-mobile" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
    </nav>
    <div class="sp-mobile-sheet__home-bar"></div>
</div>

<script>
(function () {
    var backdrop   = document.getElementById('spMobileBackdrop');
    var sheet      = document.getElementById('spMobileSheet');
    var closeBtn   = document.getElementById('spMobileClose');
    var navControl = document.querySelector('.nav-control');
    var hamburger  = navControl ? navControl.querySelector('.hamburger') : null;

    function isMobile() { return window.innerWidth < 992; }

    function openSheet() {
        sheet.classList.add('is-open');
        backdrop.classList.add('is-open');
        document.body.classList.add('sp-mobile-nav-open');
        sheet.removeAttribute('aria-hidden');
        backdrop.removeAttribute('aria-hidden');
    }

    function closeSheet() {
        sheet.classList.remove('is-open');
        backdrop.classList.remove('is-open');
        document.body.classList.remove('sp-mobile-nav-open');
        sheet.setAttribute('aria-hidden', 'true');
        backdrop.setAttribute('aria-hidden', 'true');
    }

    if (navControl) {
        navControl.addEventListener('click', function () {
            if (!isMobile()) return;
            // Revert the theme's sidebar overlay that fires on the same click
            var mw = document.getElementById('main-wrapper');
            if (mw) mw.classList.remove('menu-toggle');
            if (hamburger) hamburger.classList.remove('is-active');
            openSheet();
        });
    }

    if (closeBtn) closeBtn.addEventListener('click', closeSheet);
    if (backdrop) backdrop.addEventListener('click', closeSheet);
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && sheet.classList.contains('is-open')) closeSheet();
    });
})();
</script>
