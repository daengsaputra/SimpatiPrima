<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Storage;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    public const ROLE_PEMINJAM = 'peminjam';
    public const ROLE_PETUGAS = 'petugas';
    public const ROLE_SUPER_ADMIN = 'super_admin';

    public const ROLE_LABELS = [
        self::ROLE_PEMINJAM => 'Pegawai',
        self::ROLE_PETUGAS => 'Admin Sistem',
        self::ROLE_SUPER_ADMIN => 'Super Admin',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'photo',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function getPhotoUrlAttribute(): ?string
    {
        $path = trim((string) $this->photo);

        if ($path === '') {
            return null;
        }

        if (preg_match('/^https?:\/\//i', $path)) {
            return $path;
        }

        $normalized = str_replace('\\', '/', $path);
        $normalized = ltrim($normalized, '/');
        $normalized = preg_replace('#^(storage|public)/+#i', '', $normalized);

        if (is_file(public_path($normalized))) {
            return asset($normalized);
        }

        if (is_file(public_path('storage/' . $normalized))) {
            return asset('storage/' . $normalized);
        }

        if (Storage::disk('public')->exists($normalized)) {
            return asset('storage/' . $normalized);
        }

        return asset('storage/' . $normalized);
    }

    public static function roleValues(): array
    {
        return array_keys(self::ROLE_LABELS);
    }

    public function getRoleLabelAttribute(): string
    {
        return self::ROLE_LABELS[$this->role] ?? ucfirst(str_replace('_', ' ', (string) $this->role));
    }
}
