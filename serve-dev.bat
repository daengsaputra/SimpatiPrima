@echo off
setlocal

set "LARAGON_PHP=D:\laragon\bin\php\php-8.3.26-Win32-vs16-x64\php.exe"

if exist "%LARAGON_PHP%" (
    "%LARAGON_PHP%" artisan serve --host=127.0.0.1 --port=8000
    exit /b %errorlevel%
)

where php >nul 2>nul
if %errorlevel%==0 (
    php artisan serve --host=127.0.0.1 --port=8000
    exit /b %errorlevel%
)

echo PHP tidak ditemukan. Aktifkan PHP Laragon atau tambahkan php.exe ke PATH.
exit /b 1
