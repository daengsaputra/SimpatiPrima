<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class BpipSsoController extends Controller
{
    public function redirect(Request $request): RedirectResponse
    {
        $config = config('services.bpip_sso');

        if (blank($config['client_id'])) {
            return redirect()->route('login')->with('status', 'SSO BPIP belum dikonfigurasi. Isi BPIP_SSO_CLIENT_ID dan BPIP_SSO_CLIENT_SECRET di .env.');
        }

        $state = Str::random(40);
        $request->session()->put('bpip_sso_state', $state);

        $query = http_build_query([
            'client_id' => $config['client_id'],
            'redirect_uri' => $config['redirect'],
            'response_type' => 'code',
            'scope' => $config['scope'],
            'state' => $state,
        ]);

        return redirect()->away($config['authorize_url'] . '?' . $query);
    }

    public function callback(Request $request): RedirectResponse
    {
        $config = config('services.bpip_sso');
        $state = $request->session()->pull('bpip_sso_state');

        if ($request->filled('error')) {
            return redirect()->route('login')->with('status', 'Login SSO BPIP dibatalkan atau tidak disetujui.');
        }

        if (!$request->filled('code') || !hash_equals((string) $state, (string) $request->query('state'))) {
            return redirect()->route('login')->withErrors(['login' => 'Callback SSO BPIP tidak valid. Silakan coba login ulang.']);
        }

        $tokenResponse = Http::asForm()
            ->acceptJson()
            ->post($config['token_url'], [
                'grant_type' => 'authorization_code',
                'client_id' => $config['client_id'],
                'client_secret' => $config['client_secret'],
                'redirect_uri' => $config['redirect'],
                'code' => $request->query('code'),
            ]);

        if ($tokenResponse->failed() || blank($tokenResponse->json('access_token'))) {
            return redirect()->route('login')->withErrors(['login' => 'Token SSO BPIP tidak berhasil diterima.']);
        }

        $profileResponse = Http::withToken($tokenResponse->json('access_token'))
            ->acceptJson()
            ->get($config['user_url']);

        if ($profileResponse->failed()) {
            return redirect()->route('login')->withErrors(['login' => 'Profil pengguna SSO BPIP tidak berhasil dibaca.']);
        }

        $profile = $profileResponse->json();
        $name = $this->profileValue($profile, ['name', 'nama', 'username', 'preferred_username', 'user.name']) ?: 'Pengguna SSO BPIP';
        $email = $this->profileValue($profile, ['email', 'mail', 'user.email']);
        $identifier = $this->profileValue($profile, ['id', 'sub', 'nip', 'username', 'preferred_username']) ?: Str::slug($name);

        if (blank($email)) {
            $email = Str::slug((string) $identifier) . '@sso.bpip.local';
        }

        $user = User::updateOrCreate(
            ['email' => strtolower($email)],
            [
                'name' => $name,
                'password' => Hash::make(Str::random(40)),
                'role' => $config['default_role'],
            ]
        );

        Auth::login($user, true);
        $request->session()->regenerate();

        return redirect()->intended(route('ikpa.input'))->with('success', 'Berhasil login dengan SSO BPIP.');
    }

    private function profileValue(array $profile, array $keys): ?string
    {
        foreach ($keys as $key) {
            $value = data_get($profile, $key);

            if (is_scalar($value) && trim((string) $value) !== '') {
                return trim((string) $value);
            }
        }

        return null;
    }
}
