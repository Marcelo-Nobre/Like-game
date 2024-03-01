<?php

use Illuminate\Support\Fluent;
use Illuminate\Support\Facades\Auth;

if (! function_exists('fluent')) {
    /**
     * function fluent
     */
    function fluent(array|object $attributes = []): object
    {
        return new Fluent($attributes);
    }
}

if (!function_exists('userMetaData')) {
    /**
     * userMetaData function
     *
     * @param string $key
     *
     * @param mixed $default
     *
     * @return mixed
     */
    function userMetaData(?string $key = null, mixed $default = null): mixed
    {
        return Auth::user()?->metaData($key, $default) ?? $default;
    }
}

if (!function_exists('userDate')) {
    /**
     * function userDate
     *
     * @param string|DateTimeInterface|null $time
     *
     * @see https://php.net/manual/en/datetime.format.php
     *
     * @param null|string $format
     *
     * @param null|string $timezone
     *
     * @return string|\Illuminate\Support\Carbon
     */
    function userDate(
        string|DateTimeInterface|null $time = null,
        ?string $format = null,
        ?string $timezone = null,
    ): string|Illuminate\Support\Carbon {
        $timezone ??= Auth::user()?->metaData('timezone') ?: config('app.timezone');
        $carbonTime = now()->parse($time ?: null);

        if ($timezone) {
            $carbonTime = $carbonTime->timezone($timezone);
        }

        if (!$format) {
            return $carbonTime;
        }

        return $carbonTime->format($format);
    }
}
