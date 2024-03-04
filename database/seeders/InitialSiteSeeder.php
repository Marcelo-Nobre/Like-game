<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Helpers\SiteConfig;
use Illuminate\Support\Facades\Artisan;
use App\Helpers\SiteMenu\MenuControl;

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

        SiteConfig::set('footer_links', [
            [
                'title' => 'Redes Sociais',
                'class' => null,
                'links' => [
                    MenuControl::generateLink([
                        'url' => '#facebook',
                        'icon' => 'fab-facebook',
                        'label' => 'Facebook',
                    ], true),
                    MenuControl::generateLink([
                        'url' => '#instagram',
                        'icon' => 'fab-instagram',
                        'label' => 'Instagram',
                    ], true),
                    MenuControl::generateLink([
                        'url' => '#youtube',
                        'icon' => 'fab-youtube',
                        'label' => 'YouTube',
                    ], true),
                    MenuControl::generateLink([
                        'url' => '#linkedin',
                        'icon' => 'fab-linkedin',
                        'label' => 'LinkedIn',
                    ], true),
                ],
            ],
            [
                'title' => config('app.name', 'Site'),
                'class' => null,
                'links' => [
                    MenuControl::generateLink([
                        'label' => config('app.name', 'Site'),
                        'route' => 'home',
                        'icon' => 'mdi-monitor-dashboard',
                    ], true),
                    MenuControl::generateLink([
                        'label' => 'Dashboard',
                        'route' => 'dashboard',
                        'icon' => 'mdi-monitor-dashboard',
                    ], true),
                    MenuControl::generateLink([
                        'url' => 'mailto:crc@hflex.net.br',
                        'icon' => 'far-envelope',
                        'title' => 'E-mail',
                        'label' => 'crc@hflex.net.br',
                    ], true),
                    MenuControl::generateLink([
                        'url' => 'https://api.whatsapp.com/send/?phone=551138930000&text&type=phone_number&app_absent=0',
                        'icon' => 'fab-whatsapp',
                        'title' => 'WhatsApp',
                        'label' => '(11) 3893-0000',
                    ], true),
                    MenuControl::generateLink([
                        'url' => '#unidades',
                        'icon' => 'far-map',
                        'label' => 'Unidades',
                    ], true),
                ],
            ],
            [
                'title' => 'Para Clientes',
                'class' => null,
                'links' => [
                    MenuControl::generateLink([
                        'url' => '#unidades',
                        'icon' => 'far-map',
                        'label' => 'Unidades',
                    ], true),
                    MenuControl::generateLink([
                        'url' => '#2-via-boleto',
                        'icon' => 'mdi-monitor-dashboard',
                        'label' => '2° Via Boleto',
                    ], true),
                    MenuControl::generateLink([
                        'url' => '#area-do-cliente',
                        'icon' => 'mdi-monitor-dashboard',
                        'label' => 'Área do cliente',
                    ], true),
                ]
            ],
        ]);

        SiteConfig::set('footer_banner', [
            'show' => true, //TODO
            'title' => 'Join with 5000+ Startups Growing with Base.',
            'cta' => MenuControl::generateLink([
                'label' => 'Get Started Now',
                'route' => 'dashboard',
                'icon' => 'mdi-monitor-dashboard',
            ], true),
            'content' => html()->p(
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis nibh lorem. Duis sed odio lorem. In a efficitur leo. Ut venenatis rhoncus.'
            )->__toString(),
        ]);

        SiteConfig::set('social_network_links', [
            MenuControl::generateLink([
                'url' => '#facebook',
                'icon' => 'fab-facebook',
                'label' => 'Facebook',
            ], true),
            MenuControl::generateLink([
                'url' => '#instagram',
                'icon' => 'fab-instagram',
                'label' => 'Instagram',
            ], true),
            MenuControl::generateLink([
                'url' => '#youtube',
                'icon' => 'fab-youtube',
                'label' => 'YouTube',
            ], true),
            MenuControl::generateLink([
                'url' => '#linkedin',
                'icon' => 'fab-linkedin',
                'label' => 'LinkedIn',
            ], true),
        ]);

        Artisan::call('cache:clear');
    }
}
