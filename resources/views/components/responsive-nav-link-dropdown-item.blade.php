@props([
    'active',
])

@php
$baseClass = implode(' ', [
    'block w-full -ps-3 -pe-4 -py-2 border-l-4 text-start text-base font-medium',
    'focus:outline-none transition duration-150 ease-in-out',
]);
$classes = ($active ?? false)
            ? implode(' ', [
                'border-indigo-400',
                'dark:border-indigo-600',
                'text-indigo-700',
                'dark:text-indigo-300',
                'bg-indigo-50',
                'bg-indigo-100/50',
                'hover:bg-indigo-300/50',
                'dark:bg-indigo-900/50',
                'dark:hover:bg-indigo-700/50',
                'focus:outline-none',
                'focus:text-indigo-800',
                'dark:focus:text-indigo-200',
                'focus:bg-indigo-100',
                'dark:focus:bg-indigo-900',
                'focus:border-indigo-700',
                'dark:focus:border-indigo-300',
                'transition',
                'duration-150',
                'ease-in-out',
            ])
            : implode(' ', [
                'border-transparent',
                'text-gray-600',
                'dark:text-gray-400',
                'hover:text-gray-800',
                'dark:hover:text-gray-200',
                'hover:bg-gray-100',
                'dark:hover:bg-gray-600',
                'hover:border-gray-300',
                'dark:hover:border-gray-400',
                'focus:text-gray-800',
                'dark:focus:text-gray-200',
                'focus:bg-gray-500',
                'dark:focus:bg-gray-700',
                'focus:border-gray-300',
                'dark:focus:border-gray-600',
            ]);
@endphp

<li {{ $attributes->merge(['class' => "{$baseClass} {$classes}"]) }}>
    <a href="#"
        class="block w-full ps-3 pe-4 py-2"
        role="menuitem">
        <div class="inline-flex items-center">
            {{ $slot }}
        </div>
    </a>
</li>
