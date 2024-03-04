<?php

namespace App\Helpers\SiteMenu;

use Illuminate\Support\Fluent;
use Illuminate\Support\Arr;

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
                'authOnly' => false,
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

            $items[] =  static::generateLink($item);
        }

        return $items ?? [];
    }
}
