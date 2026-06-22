<div class="ikpa-running-notice" role="status" aria-live="polite">
    <div class="ikpa-running-notice__label">
        <i class="fas fa-triangle-exclamation" aria-hidden="true"></i>
        <span>Peringatan</span>
    </div>
    <div class="ikpa-running-notice__track">
        <div class="ikpa-running-notice__text">
            @foreach ([1, 2] as $repeat)
                <span @if($repeat === 2) aria-hidden="true" @endif>
                    Selamat datang di <strong>SIMPATI PRIMA</strong>. Pastikan data kinerja anggaran diperbarui secara berkala, akurat, dan tepat waktu.
                    <b>Terima kasih atas kerja sama seluruh unit kerja.</b>
                </span>
                <span @if($repeat === 2) aria-hidden="true" @endif>
                    Unit Kerja dengan status <strong>PUNISHMENT</strong> wajib segera menyelesaikan kewajiban dan melakukan perbaikan kinerja.
                    <b>Tindak lanjut sekarang!</b>
                </span>
            @endforeach
        </div>
    </div>
</div>
