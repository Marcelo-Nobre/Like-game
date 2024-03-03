@php
    $showDevItems = config('meta-app.env.showDevItems', false);
    $title = siteConfig('title', 'Laravel');
@endphp

<footer
    @class([
        'text-gray-400 dark:text-gray-400',
        'bg-gray-900 dark:bg-gray-900',
    ])
>
    <div class="w-full py-6 lg:py-8">
        <div class="mx-auto w-full max-w-screen-xl px-4 py-6 lg:py-8">
            <div class="grid grid-cols-4 gap-8 mb-3 md:mb-0 py-2">
                <a href="{{ url('') }}" class="flex items-center">
                    @if ($darkLogo = siteConfig()->get('logo.light'))
                        <img
                            src="{{ asset($darkLogo) }}"
                            class="h-8 me-3 dark:hidden"
                            alt="{{ $title }}"
                        />
                    @endif

                    @if ($darkLogo = siteConfig()->get('logo.dark'))
                        <img
                            src="{{ asset($darkLogo) }}"
                            class="hidden h-8 me-3 dark:block"
                            alt="{{ $title }}"
                        />
                    @endif
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">{{ $title }}</span>
                </a>
            </div>

            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3 py-3 mt-8 pt-4 md:pt-8 md:pb-2">
                @foreach (siteConfig()->get('footer_links') ?? [] as $linkItem)
                    @if(!($linkItem['links'] ?? null))
                        @continue
                    @endif
                    <div class="">
                        <h2 class="mb-6 text-sm font-semibold text-gray-200 uppercase dark:text-white">
                            {{ $linkItem['title'] ?? null }}
                        </h2>

                        <ul class="font-normal">
                            @foreach ($linkItem['links'] ?? [] as $link)
                                @php
                                    $link = fluent($link);
                                @endphp

                                @if (!$link?->show)
                                    @continue
                                @endif

                                @php
                                    $url = $link?->route ? route($link?->route, $link?->routeParams) : ($link?->url ?: '#!');
                                @endphp

                                <li class="text-gray-400 hover:text-gray-300 dark:text-gray-400 mb-2">
                                    <a
                                        href="{{ $url }}"
                                        class="inline-flex items-center no-underline hover:underline px-4 py-1"
                                    >
                                        @if ($link?->icon) @svg($link?->icon, 'me-3 w-5 h-5 mr-2') @endif
                                        {{ $link?->label }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
                {{-- <div>
                    <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                    <ul class="text-gray-500 dark:text-gray-400 font-medium">
                        <li class="mb-4">
                            <a href="#" class="hover:underline">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div> --}}
            </div>
        </div>

        <hr class="w-full my-6 border-gray-200 sm:mx-auto dark:border-gray-400 lg:my-8" />

        <div class="text-center mx-8 sm:flex sm:items-center sm:justify-between md:px-24">
            <div class="text-sm text-gray-400 sm:text-center dark:text-gray-400">
                <span>
                    {{ date('Y') }} &copy;
                    @lang(siteConfig('footer_data.copyright_text', 'All Rights Reserved')).
                </span>
                <a href="{{ url('') }}" class="underline hover:no-underline">{{ config('app.name', 'Laravel') }}</a>
            </div>
            <div class="text-sm text-gray-400 sm:text-center dark:text-gray-400">
                Desenvolvido por <a href="https://tiagofranca.com" target="_blank" class="underline hover:no-underline">F2 Sistemas</a>
            </div>

            <div class="flex mt-4 sm:justify-center sm:mt-0">
                @foreach (siteConfig()->get('social_network_links') ?? [] as $link)
                    @php
                        $link = fluent($link);
                    @endphp

                    @if (!$link?->show)
                        @continue
                    @endif

                    @php
                        $url = $link?->route ? route($link?->route, $link?->routeParams) : ($link?->url ?: '#!');
                    @endphp

                    <a href="{{ $url }}" class="text-gray-500 hover:text-white">
                        @if ($link?->icon) @svg($link?->icon, 'me-3 w-4 h-4') @endif
                        <span class="sr-only">{{ $link?->label }}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</footer>

<button
    class="up bg-amber-500 hover:bg-amber-600 dark:bg-amber-600 dark:hover:bg-amber-700 bottom-12"
>
    <i class="fa-solid fa-angle-up"></i>
</button>

<style>
[data-id="loading-spinner"] {
    position: fixed;
    display: flex;
    background: #353942;
    width: 100%;
    height: 100vh;
    inset: 0;
    z-index: 9000;
    align-items: center;
    justify-content: center;
}
.hide-spinner {
    display: none !important;
}
</style>
<div
    data-id="loading-spinner"
    -style="opacity: 1"
    class=""
>
    <span class="loading loading-spinner text-info loading-lg"></span>
</div>
