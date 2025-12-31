<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;
use App\Models\Subscription;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;



class User extends Authenticatable implements FilamentUser
{
    use HasApiTokens;

    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fname',
        'lname',
        'name',
        'email',
        'tg_id',
        'address',
        'city',
        'country',
        'state',
        'zip_code',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
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

    // Unique code for referral

    protected static function booted()
    {
        static::created(function ($user) {
            $user->referral_code = strtoupper(Str::random(8));
            $user->save();
        });
    }


    // Referral Relationship

    public function referrals()
    {
        return $this->hasMany(User::class, 'referred_by');
    }

    public function referrer()
    {
        return $this->belongsTo(User::class, 'referred_by');
    }

    // $user->referrals; // all people they referred
    // $user->referrer;  // who referred them


    public function subscription()
    {
        return $this->hasOne(Subscription::class);
    }


    // Custom filament codes
    // public function canAccessFilament(): bool
    // {
    //     return true; // every user can access Filament
    // }


    public function canAccessPanel(Panel $panel): bool
    {
        // Example 1: Allow all users to access Filament
        // return true;

        // Example 2 (optional): Restrict only admins
        // return $this->is_admin === true;
        // return str_ends_with($this->email, 'nossh@gmail.com') && $this->hasVerifiedEmail();
        // return str_ends_with($this->email, 'nossh@gmail.com');
        return in_array($this->email, ['nosshamary@gmail.com', 'test@gmail.com']);

    }


    // public function getFilamentName(): string
    // {
    //     // return $this->name ?? $this->email; // fallback to email if name is null
    //     return trim(($this->fname ?? '') . ' ' . ($this->lname ?? '')) ?: ($this->email ?? 'User');

    // }





}
