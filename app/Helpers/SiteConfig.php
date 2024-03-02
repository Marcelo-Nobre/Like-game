<?php

namespace App\Helpers;

use Arandu\LaravelSiteOptions\Option;
use Illuminate\Support\Arr;

class SiteConfig
{
    /**
     * get function
     *
     * @param string|null $key
     * @param mixed $default
     *
     * @return mixed
     */
    public static function get(?string $key = null, mixed $default = null): mixed
    {
        return Option::get(
            implode(
                '.',
                array_filter([
                    'site_settings',
                    $key,
                ])
            ),
            $default
        );
    }

    /**
     * Set the value of an option
     *
     * @param string $key   Option name
     * @param mixed $value Option value
     */
    public static function set(string $key, mixed $value): void
    {
        $config = Arr::dot(
            Arr::wrap(static::get() ?: [])
        );

        $config[$key] = $value;

        Option::rm('site_settings');
        Option::set('site_settings', Arr::undot($config));

        return;
    }

    /**
     * Remove an option
     *
     * @param ?string $key Option name
     */
    public static function rm(?string $key): void
    {
        $config = Arr::dot(
            Arr::wrap(static::get() ?: [])
        );

        unset($config[$key]);

        Option::set('site_settings', Arr::undot($config));

        return;
    }

    /**
     * Check if an option exists
     *
     * @param ?string $key   Option name
     *
     * @return bool
     */
    public static function has(?string $key): bool
    {
        $config = Arr::dot(
            Arr::wrap(static::get() ?: [])
        );

        return isset($config[$key]);
    }
}
