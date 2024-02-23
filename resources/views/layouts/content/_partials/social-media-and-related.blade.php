
<li class="w-full md:block md:w-auto" id="navbar-social-media-1">
    <ul
        class="flex flex-row justify-between font-medium p-4 md:p-0 mt-4 border border-gray-700 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
        @foreach ([
                [
                    'url' => 'mailto:crc@hflex.net.br',
                    'icon' => 'fa-regular fa-envelope',
                    'title' => 'E-mail',
                    'label' => 'crc@hflex.net.br',
                    'show' => true,
                ],
                [
                    'url' => 'https://api.whatsapp.com/send/?phone=551138930000&text&type=phone_number&app_absent=0',
                    'icon' => 'fa-brands fa-whatsapp',
                    'title' => 'WhatsApp',
                    'label' => '(11) 3893-0000',
                    'show' => true,
                ],
                [
                    'url' => '#unidades',
                    'icon' => 'fa-regular fa-map',
                    'label' => 'Unidades',
                    'show' => true,
                ],

        ] as $socialMedia)
            @php
                $socialMedia = fluent($socialMedia);
            @endphp

            @if (!$socialMedia?->show)
                @continue
            @endif
            <li>
                <a
                    href="{{ $socialMedia?->url ?? '#!' }}"
                    title="{{ $socialMedia?->label ?? '' }}"
                    target="_blank"
                    title="{{ $socialMedia?->title ?? $socialMedia?->label ?? '' }}"
                    class="block py-2 px-3 text-white rounded hover:bg-gray-700 md:hover:bg-transparent md:border-0 md:hover:text-amber-500 md:p-0"
                >
                    @if ($socialMedia?->icon) <i class="text-amber-600 {{ $socialMedia?->icon }}"></i> @endif {{ $socialMedia?->label ?? '' }}
                </a>
            </li>
        @endforeach
    </ul>
</li>

<li class="w-full md:block md:w-auto" id="navbar-social-media-2">
    <ul
        class="flex flex-row justify-between font-medium p-4 md:p-0 mt-4 border border-gray-700 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
        @foreach ([
            [
                'url' => '#facebook',
                'icon' => 'fa-brands fa-facebook',
                'label' => 'Facebook',
                'show' => true,
            ],
            [
                'url' => '#instagram',
                'icon' => 'fa-brands fa-instagram',
                'label' => 'Instagram',
                'show' => true,
            ],
            [
                'url' => '#youtube',
                'icon' => 'fa-brands fa-youtube',
                'label' => 'YouTube',
                'show' => true,
            ],
            [
                'url' => '#linkedin',
                'icon' => 'fa-brands fa-linkedin',
                'label' => 'LinkedIn',
                'show' => true,
            ],
        ] as $socialMedia)
            @php
                $socialMedia = fluent($socialMedia);
            @endphp

            @if (!$socialMedia?->show)
                @continue
            @endif

            <li>
                <a
                    href="{{ $socialMedia?->url ?? '#!' }}"
                    title="{{ $socialMedia?->label ?? '' }}"
                    target="_blank"
                    title="{{ $socialMedia?->title ?? $socialMedia?->label ?? '' }}"
                    class="block py-2 px-3 text-white rounded hover:bg-gray-700 md:hover:bg-transparent md:border-0 md:hover:text-amber-500 md:p-0"
                >
                    @if ($socialMedia?->icon) <i class="text-amber-600 {{ $socialMedia?->icon }}"></i> @endif {{ $socialMedia?->label ?? '' }}
                </a>
            </li>
        @endforeach
    </ul>
</li>
