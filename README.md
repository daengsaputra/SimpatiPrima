# SimpatiPrima

Laravel 12 project for Simpati Prima.

## Jalankan di Laragon

1. Pastikan Laragon aktif dan MySQL berjalan.
2. Pastikan database `simpati_prima` sudah ada.
3. Jika belum pernah diisi, salin `.env.example` ke `.env`.
4. Jalankan:
   - `composer install`
   - `npm install`
   - `php artisan key:generate`
   - `php artisan migrate`
5. Untuk development:
   - `npm run serve` untuk server Laravel + reload PHP
   - `npm run dev` untuk Vite

## Konfigurasi penting

- `APP_URL=http://localhost:8000`
- `DB_DATABASE=simpati_prima`
- `DB_USERNAME=root`
- `DB_PASSWORD=` kosong untuk default Laragon
- `BPIP_SSO_REDIRECT_URI=${APP_URL}/auth/bpip/callback`

## Catatan

- Kalau memakai Apache Laragon, pastikan document root mengarah ke folder `public`.
- Jika `php` tidak dikenali di terminal, gunakan PHP bawaan Laragon atau jalankan lewat terminal Laragon.
