@if ($footerBanner && $footerBanner?->show ?? null)
<div>
    <div class="dolor">
        <img src="{{ asset('imgs/shape-16.svg') }}" alt="">
        <div class="container">
            <div class="growing">
                <h2>{{ $footerBanner?->title ?? '' }}</h2>
                {!! $footerBanner?->content ?? '' !!}
            </div>
            <div class="started p-0 m-0" style="z-index: 2;">
                @if ($cta?->label ?? null && $cta?->show)
                    @php
                        $url = ($cta?->type === 'link' && $cta?->route) ? route($cta?->route, $cta?->routeParams) : ($cta?->url ?: '#!');
                    @endphp

                    {{
                        html()->element(
                            ($cta?->type === 'link') ? 'a' : 'button'
                        )
                        ->attributes([
                            ...(
                                $cta?->onclick ? [
                                    'onclick' => $cta?->onclick,
                                ] : []
                            ),
                            ...(
                                $cta?->type === 'button' ? [
                                    'type' => 'button',
                                ] : []
                            ),
                            ...(
                                $cta?->type === 'link' ? [
                                    'href' => $url,
                                ] : []
                            ),
                            ...($cta?->attributes ? \Arr::wrap($cta?->attributes) : []),
                        ])
                        ->class([
                            'inline-flex items-center font-medium text-center',
                            'text-blue-600 hover:text-sky-100 rounded-full',
                            'transition duration-300 ease-in-out',
                            'shadow-lg hover:shadow-gray-900/50',
                            'gap-x-3 text-1xl px-3 py-2',
                            'bg-sky-100 ring-0 shadow-lg space-y-3 hover:bg-sky-500',
                        ])
                        ->html(
                            implode(' ', [
                                $cta?->label ?? '',
                                $cta?->icon ? svg($cta?->icon, 'me-3 w-4 h-4')?->toHtml() : '',
                            ])
                        )
                    }}
                @endif
            </div>
        </div>
    </div>
</div>
@endif
