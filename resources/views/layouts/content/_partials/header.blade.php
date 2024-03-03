<div class="scroller z-[100] fixed top-0 bg-amber-600 h-0.5"></div>

<div class="h-24 bg-transparent"></div>

<nav
    data-id="top-menu"
    class="min-h-12 bg-gray-900 border-gray-700 fixed w-full z-50 top-0 start-0"
>
    <div
        data-id="social-links"
        class="flex flex-wrap items-center justify-between mx-24 p-4"
    >
        <div class="hidden w-full md:block" id="navbar-dropdown-top-links">
            <ul
                class="flex flex-row justify-between"
            >
                @include('layouts.content._partials.social-media-and-related')
            </ul>
        </div>
    </div>

    <div class="w-full border-b border-gray-600"></div>

    <div
        data-id="main-links"
        class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2"
    >
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img data-id="logo" src="{{ asset('imgs/HFlex-logo-branco.png') }}" class="h-16" alt="{{ config('app.name', '') }}" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
        </a>

        <div class="flex md:order-2 space-x-3 md:space-x-3 rtl:space-x-reverse">
            <a
                href="#!"
                class="text-white bg-amber-600 hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-300 font-medium rounded-md text-sm px-4 py-2 text-center dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800"
            >
                2° Via Boleto
            </a>

            <a
                href="#!"
                class="text-white bg-amber-600 hover:bg-amber-800 focus:ring-4 focus:outline-none focus:ring-amber-300 font-medium rounded-md text-sm px-4 py-2 text-center dark:bg-amber-600 dark:hover:bg-amber-700 dark:focus:ring-amber-800"
            >
                Área do cliente
            </a>

            <button
                data-collapse-toggle="navbar-cta"
                type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
                <span class="sr-only">Menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>

        <div class="hidden w-full md:block md:w-auto" id="navbar-cta">
            <ul
                class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:border-gray-700"
            >
                @foreach ([
                    [
                        'type' => 'link', // link|button
                        'onclick' => null, // se type === button
                        'url' => '#!',
                        'label' => 'Item',
                        'active' => false,
                        'show' => false, // Se deve mostrar no menu
                        'sub_items' => [], // Se tiver itens será apresentado como dropdown
                    ],
                    [
                        'type' => 'link',
                        'url' => route('home'),
                        'label' => 'Home',
                        'active' => \Route::currentRouteName() === 'home',
                        'show' => true,
                        'new_tab' => false,
                        'sub_items' => [],
                    ],
                    [
                        'type' => 'link',
                        'url' => route('blog-grid'),
                        'label' => 'Blog',
                        'active' => \Route::currentRouteName() === 'blog-grid',
                        'show' => true,
                        'new_tab' => false,
                        'sub_items' => [],
                    ],
                    [
                        'type' => 'link',
                        'url' => route('blog-single'),
                        'label' => 'Post do blog',
                        'active' => \Route::currentRouteName() === 'blog-single',
                        'show' => true,
                        'new_tab' => false,
                        'sub_items' => [],
                    ],
                    [
                        'type' => 'link',
                        'url' => route('sign-in'),
                        'label' => 'Login',
                        'active' => \Route::currentRouteName() === 'sign-in',
                        'show' => true,
                        'new_tab' => false,
                        'sub_items' => [],
                    ],
                    [
                        'type' => 'link',
                        'url' => route('sign-up'),
                        'label' => 'Registro',
                        'active' => \Route::currentRouteName() === 'sign-up',
                        'show' => true,
                        'new_tab' => false,
                        'sub_items' => [],
                    ],
                    [
                        'type' => 'link',
                        'url' => route('chat.room'),
                        'label' => 'Chat WS',
                        'active' => \Route::currentRouteName() === 'chat.room',
                        'show' => true,
                        'new_tab' => true,
                        'sub_items' => [],
                    ],
                ] as $menuItem)
                    @php
                        $menuItem = fluent($menuItem);
                        $subItems = \Arr::wrap($menuItem?->sub_items);
                    @endphp

                    @if (!$menuItem?->show)
                        @continue
                    @endif

                    @if ($subItems)
                        {{-- dropdown --}}
                        {{-- WIP --}}
                        {{-- //TODO --}}
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-amber-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-amber-500 dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Dropdown <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar" class="z-10 hidden font-normal -bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:-bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-amber-700 md:p-0 dark:text-white md:dark:hover:text-amber-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
                                    </li>
                                </ul>
                                <div class="py-1">
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                                </div>
                            </div>
                        </li>
                    @else
                        <li>
                            <a
                                href="{{ $menuItem?->url ?? '#!' }}"
                                title="{{ $menuItem?->label ?? '' }}"
                                @if ($menuItem?->new_tab) target="_blank" @endif
                                title="{{ $menuItem?->title ?? $menuItem?->label ?? '' }}"
                                @class([
                                    'block',
                                    'py-2',
                                    'px-3',
                                    'rounded',
                                    'md:p-0',
                                    'hover:bg-gray-100',
                                    'dark:hover:bg-gray-700',
                                    'dark:hover:text-white',
                                    'md:dark:hover:bg-transparent',
                                    'md:hover:bg-transparent',
                                    'md:border-0',

                                    ...($menuItem?->active
                                        ? [// Se 'active' == true
                                            'text-amber-500',
                                            'font-bold',
                                            'md:hover:text-amber-300',
                                            'md:dark:hover:text-amber-500',
                                        ]
                                        :  [// Se 'active' == false
                                            'text-white',
                                            'md:hover:text-amber-500',
                                            'md:dark:hover:text-amber-500',
                                        ]
                                    ),
                                ])
                            >@if ($menuItem?->icon) <i class="{{ $menuItem?->icon }}"></i> @endif {{ $menuItem?->label ?? '' }}</a>
                        </li>
                    @endif
                @endforeach

                <div class="md:hidden">
                    @include('layouts.content._partials.social-media-and-related')
                </div>
            </ul>
        </div>
    </div>
</nav>
