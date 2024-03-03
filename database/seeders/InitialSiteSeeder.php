<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Helpers\SiteConfig;
use Illuminate\Support\Facades\Artisan;

class InitialSiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        static::initialData();
    }

    public static function initialData()
    {
        SiteConfig::set('title', config('app.name', 'Laravel'));
        SiteConfig::set('footer_data', [
            'copyright_text' => 'All Rights Reserved',
        ]);

        SiteConfig::set('page_auth_login', [
            'allowed_gh_login' => false,
            'allowed_tw_login' => false,
        ]);

        SiteConfig::set('logo', [
            'default' => 'imgs/logo-dark.svg',
            'dark' => 'imgs/logo-dark.svg',
            'light' => 'imgs/logo-light.svg',
        ]);

        $genLink = fn (array $linkInfo) => array_merge(
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
                'show' => true, // Se deve mostrar o link
            ],
            $linkInfo
        );

        SiteConfig::set('footer_links', [
            [
                'title' => 'Redes Sociais',
                'class' => null,
                'links' => [
                    $genLink([
                        'url' => '#facebook',
                        'icon' => 'fab-facebook',
                        'label' => 'Facebook',
                    ]),
                    $genLink([
                        'url' => '#instagram',
                        'icon' => 'fab-instagram',
                        'label' => 'Instagram',
                    ]),
                    $genLink([
                        'url' => '#youtube',
                        'icon' => 'fab-youtube',
                        'label' => 'YouTube',
                    ]),
                    $genLink([
                        'url' => '#linkedin',
                        'icon' => 'fab-linkedin',
                        'label' => 'LinkedIn',
                    ]),
                ],
            ],
            [
                'title' => config('app.name', 'Site'),
                'class' => null,
                'links' => [
                    $genLink([
                        'label' => config('app.name', 'Site'),
                        'route' => 'home',
                        'icon' => 'mdi-monitor-dashboard',
                    ]),
                    $genLink([
                        'label' => 'Dashboard',
                        'route' => 'dashboard',
                        'icon' => 'mdi-monitor-dashboard',
                    ]),
                    $genLink([
                        'url' => 'mailto:crc@hflex.net.br',
                        'icon' => 'far-envelope',
                        'title' => 'E-mail',
                        'label' => 'crc@hflex.net.br',
                    ]),
                    $genLink([
                        'url' => 'https://api.whatsapp.com/send/?phone=551138930000&text&type=phone_number&app_absent=0',
                        'icon' => 'fab-whatsapp',
                        'title' => 'WhatsApp',
                        'label' => '(11) 3893-0000',
                    ]),
                    $genLink([
                        'url' => '#unidades',
                        'icon' => 'far-map',
                        'label' => 'Unidades',
                    ]),
                ],
            ],
            [
                'title' => 'Para Clientes',
                'class' => null,
                'links' => [
                    $genLink([
                        'url' => '#unidades',
                        'icon' => 'far-map',
                        'label' => 'Unidades',
                    ]),
                    $genLink([
                        'url' => '#2-via-boleto',
                        'icon' => 'mdi-monitor-dashboard',
                        'label' => '2° Via Boleto',
                    ]),
                    $genLink([
                        'url' => '#area-do-cliente',
                        'icon' => 'mdi-monitor-dashboard',
                        'label' => 'Área do cliente',
                    ]),
                ]
            ],
        ]);

        SiteConfig::set('footer_banner', [
            'show' => true, //TODO
            'title' => 'Join with 5000+ Startups Growing with Base.',
            'cta' => $genLink([
                'label' => 'Get Started Now',
                'route' => 'dashboard',
                'icon' => 'mdi-monitor-dashboard',
            ]),
            'content' => html()->p(
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis nibh lorem. Duis sed odio lorem. In a efficitur leo. Ut venenatis rhoncus.'
            )->__toString(),
        ]);

        SiteConfig::set('social_network_links', [
            $genLink([
                'url' => '#facebook',
                'icon' => 'fab-facebook',
                'label' => 'Facebook',
            ]),
            $genLink([
                'url' => '#instagram',
                'icon' => 'fab-instagram',
                'label' => 'Instagram',
            ]),
            $genLink([
                'url' => '#youtube',
                'icon' => 'fab-youtube',
                'label' => 'YouTube',
            ]),
            $genLink([
                'url' => '#linkedin',
                'icon' => 'fab-linkedin',
                'label' => 'LinkedIn',
            ]),
        ]);

        Artisan::call('cache:clear');
    }
}
