<?php

namespace App\Helpers;

class NativeCookie
{
    /**
     * all function
     *
     * @return array
     */
    public static function all(): array
    {
        return (array) ($_COOKIE ?? []);
    }

    /**
     * collection function
     *
     * @return \Illuminate\Support\Collection
     */
    public static function collection(): \Illuminate\Support\Collection
    {
        return collect(static::all());
    }

    /**
     * all function
     *
     * @return mixed
     */
    public static function get(?string $key = null, $default = null): mixed
    {
        if (!$key) {
            return $default;
        }

        return static::collection()->get($key, $default);
    }
}
