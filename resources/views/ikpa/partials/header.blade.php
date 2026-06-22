<div class="ikpa-hero-content">
    <img class="ikpa-hero-bg" src="{{ asset('images/ikpa-header-bg (1).png') }}" alt="" aria-hidden="true">

    <div class="ikpa-hero-copy">
        <h1>Selamat Datang!</h1>
        <p>Sistem Peringatan Dini &amp; Monitoring Kinerja Anggaran BPIP</p>
    </div>

    <div class="ikpa-hero-actions" aria-label="Aksi pengguna">
        <button class="ikpa-hero-icon" type="button" aria-label="Notifikasi">
            <i class="fas fa-bell" aria-hidden="true"></i>
        </button>
        <div class="ikpa-user-pill">
            <span class="ikpa-user-avatar"><i class="fas fa-user" aria-hidden="true"></i></span>
            <span>
                <strong>{{ auth()->user()->name ?? 'Admin BPIP' }}</strong>
                <small>{{ auth()->user()?->role_label ?? 'Administrator' }}</small>
            </span>
            <i class="fas fa-chevron-down" aria-hidden="true"></i>
        </div>
    </div>

    <div class="ikpa-hero-building" aria-hidden="true">
        <div class="ikpa-building-roof"></div>
        <div class="ikpa-building-main">
            <div class="ikpa-building-window"></div>
            <div class="ikpa-building-window"></div>
            <div class="ikpa-building-window"></div>
            <div class="ikpa-building-window"></div>
            <div class="ikpa-building-emblem">
                <i class="fas fa-shield-alt"></i>
            </div>
            <div class="ikpa-building-column"></div>
            <div class="ikpa-building-column"></div>
            <div class="ikpa-building-column"></div>
            <div class="ikpa-building-column"></div>
        </div>
        <div class="ikpa-building-side">
            <span>BADAN PEMBINAAN IDEOLOGI PANCASILA</span>
        </div>
    </div>
</div>
