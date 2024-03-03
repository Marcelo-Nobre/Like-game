<?php

use Illuminate\Support\Fluent;
use Illuminate\Support\Facades\Auth;
use App\Helpers\SiteConfig;
use Illuminate\Support\Arr;

if (!function_exists('fluent')) {
    /**
     * function fluent
     */
    function fluent(array|object|null $attributes = []): object
    {
        return new Fluent($attributes ?? []);
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

if (!function_exists('safe')) {
    /**
     * safe function  -- A easy way to try/catch run
     *
     * ```php
     * // Usage:
     * safe(fn () => 'may be error action', fn (\Throwable $th) => 'catch action here')
     * ```
     *
     * @param Closure $runner
     * @param Closure|null $throwableCatcher
     *
     * @return mixed
     */
    function safe(Closure $runner, ?Closure $throwableCatcher = null): mixed
    {
        try {
            return $runner();
        } catch (Throwable $th) {
            if (!$throwableCatcher) {
                return false;
            }

            return $throwableCatcher($th);
        }
    }
}

if (!function_exists('safeOr')) {
    /**
     * safeOr function
     *
     * ```php
     * // Usage:
     * safeOr(fn () => 'may be error action', 'fail')
     * safeOr(fn () => 'may be error action', null)
     * safeOr(fn () => 'may be error action')
     * safeOr(fn () => 'may be error action', [])
     * ```
     *
     * @param Closure $runner
     * @param mixed $valueOnFail
     *
     * @return mixed
     */
    function safeOr(Closure $runner, mixed $valueOnFail = null): mixed
    {
        try {
            return $runner();
        } catch (Throwable $th) {
            return $valueOnFail;
        }
    }
}

if (!function_exists('is_unserializable')) {
    /**
     * function is_unserializable
     *
     * @param mixed $data
     *
     * @return bool
     */
    function is_unserializable(mixed $data): bool
    {
        $data = is_string($data) ? trim($data) : null;

        if (!$data || (strlen($data) === 2 && $data !== 'N;') || strlen($data) < 4) {
            return false;
        }

        foreach (['N;', ';', ':'] as $partial) {
            if (
                (
                    str_contains($data[1] ?? '', $partial)
                    || str_contains($data, $partial)
                ) && (
                    str_ends_with($data, ';')
                    || str_ends_with($data, '}')
                )
            ) {
                return true;
            }
        }

        return false;
    }
}

if (!function_exists('try_unserialize')) {
    /**
     * function try_unserialize
     *
     * @param mixed $data
     * @param mixed $defaultOnFail
     * @param null|\Closure $catcher
     *
     * @return mixed
     */
    function try_unserialize(
        mixed $data,
        mixed $defaultOnFail = null,
        ?Closure $catcher = null
    ): mixed {
        try {
            if (!is_unserializable($data)) {
                return $defaultOnFail;
            }

            return unserialize($data);
        } catch (Throwable $th) {
            if ($catcher) {
                $catcher($th);
            }

            return $defaultOnFail;
        }
    }
}

if (!function_exists('siteConfig')) {
    /**
     * function siteConfig
     *
     * @param ?string $key
     * @param mixed $default
     *
     * @return mixed
     */
    function siteConfig(?string $key = null, mixed $default = null): mixed
    {
        if (app()->environment(['test', 'testing'])) {
            if (is_null($key)) {
                return fluent(
                    Arr::wrap(config('site-options.hard_defaults', []))
                );
            }

            return Arr::get(Arr::wrap(config('site-options.hard_defaults', [])), $key) ?? $default;
        }

        /**
         * @var SiteConfig $siteConfig
         */
        $siteConfig = app(SiteConfig::class);

        if (is_null($key)) {
            return $siteConfig;
        }

        return $siteConfig->get($key, $default);
    }
}
