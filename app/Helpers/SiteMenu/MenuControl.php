<?php

namespace App\Helpers\SiteMenu;

use Illuminate\Support\Fluent;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

class MenuControl
{
    /**
     * generateLink function
     *
     * @param array $linkInfo
     * @param boolean $toArray
     *
     * @return array|Fluent
     */
    public static function generateLink(
        Fluent|array $linkInfo = [],
        bool $toArray = false,
    ): array|Fluent {
        $linkInfo = is_a($linkInfo, Fluent::class) ? $linkInfo?->toArray() : $linkInfo ?? [];

        $emptyData = !$linkInfo;
        $filterSubItems = fn (array $subItems = []): array => collect(Arr::wrap($subItems))
            ->filter(
                function ($item) {
                    if (!$item || !(is_array($item) || is_a($item, Fluent::class))) {
                        return false;
                    }

                    return true;
                }
            )->toArray();

        $linkInfo['subItems'] = $filterSubItems($linkInfo['subItems'] ?? []);

        $item = array_merge(
            [
                'type' => 'link', // link|button
                'onclick' => null, // se type === button
                'route' => null,
                'routeParams' => [],
                'url' => '#!',
                'icon' => null,
                'label' => null,
                'method' => null, // null|get|post|put|...
                'authOnly' => false,
                'translateLabel' => true,
                'attributes' => [],
                'guestOnly' => false,
                'activeWhenRouteIn' => array_filter([
                    $linkInfo['route'] ?? null,
                ]),
                'show' => !$emptyData, // Se deve mostrar o link
                'subItems' => [],
            ],
            $linkInfo
        );

        foreach ($item['subItems'] ?? [] as $key => $subItem) {
            if (!$subItem) {
                unset($item['subItems'][$key]);

                continue;
            }

            $item['subItems'][$key] = static::generateLink($subItem);
        }

        return $toArray ? $item : fluent($item);
    }

    public static function prepareMenuItems(array $menuItems): array
    {
        $items = [];

        foreach ($menuItems as $item) {
            if (!$item || !(is_array($item) || is_a($item, Fluent::class))) {
                continue;
            }

            $items[] = static::generateLink($item);
        }

        return $items ?? [];
    }

    /**
     * routeIs function
     *
     * @param string|null $routeToCheck  - Route to check. If null check current.
     * @param array $route
     * @param mixed ...$routes
     *
     * @return boolean
     */
    public static function routeIs(
        ?string $routeToCheck = null,
        string|array|null $route = [],
        mixed ...$routes,
    ): bool {
        $routes = array_filter(
            array_merge(
                (array) $route,
                [
                    ...$routes,
                ]
            ),
            fn ($item) => $item && is_string($item) && trim($item)
        );

        if (!$routes) {
            return false;
        }

        $routeToCheck ??= Route::currentRouteName();

        if (in_array($routeToCheck, $routes)) {
            return true;
        }

        $partialRoutes = array_filter(
            $routes,
            fn ($item) => str_contains($item, '*')
        );

        foreach ($partialRoutes as $routeName) {
            $onEnd = str_ends_with($routeName, '*');
            $onStart = str_starts_with($routeName, '*');
            $both = $onEnd && $onStart;

            if ($both) {
                if (str_contains($routeToCheck, str($routeName)->after('*')->before('*')->toString())) {
                    return true;
                }

                continue;
            }

            if ($onEnd) {
                if (str_starts_with($routeToCheck, str($routeName)->before('*')->toString())) {
                    return true;
                }

                continue;
            }

            if ($onStart) {
                if (str_ends_with($routeToCheck, str($routeName)->after('*')->toString())) {
                    return true;
                }

                continue;
            }
        }

        return false;
    }

    /**
     * isCurrent function
     *
     * @param mixed ...$routes
     *
     * @return boolean
     */
    public static function isCurrent(
        mixed ...$routes,
    ): bool {
        return static::routeIs(
            Route::currentRouteName(),
            ...$routes,
        );
    }

    public static function getUrlData(Fluent|array $linkInfo = []): Fluent
    {
        $linkInfo = is_a($linkInfo, Fluent::class) ? $linkInfo : fluent($linkInfo);

        $isCurrent = static::isCurrent(...[
            $linkInfo?->route,
            ...((array) $linkInfo?->activeWhenRouteIn),
        ]);

        $url = ($linkInfo?->type === 'link' && $linkInfo?->route)
            ? route($linkInfo?->route, $linkInfo?->routeParams)
            : ($linkInfo?->url ?: '#!');

        return fluent([
            'current' => $isCurrent,
            'active' => $isCurrent,
            'url' => $url,
        ]);
    }
}
