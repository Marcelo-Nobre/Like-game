<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Casts\AsCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Collection;

#[\AllowDynamicProperties]
class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'meta_data',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'meta_data' => AsCollection::class,
    ];

    /**
     * setMetaData function
     *
     * @param array|Collection $data
     * @param boolean $merge
     *
     * @return static
     */
    public function setMetaData(array|Collection $data, bool $merge = true): static
    {
        $this->meta_data = $merge ? collect($this->meta_data)->merge($data) : $data;
        $this->save();

        return $this;
    }

    /**
     * metaData function
     *
     * @param string $key
     *
     * @param mixed $default
     *
     * @return mixed
     */
    public function metaData(?string $key = null, mixed $default = null): mixed
    {
        if ($key === null) {
            return collect($this->meta_data);
        }

        return collect($this->meta_data)->get($key, $default);
    }
}
