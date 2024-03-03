@php
    $title = siteConfig('title', 'Laravel');
@endphp

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
