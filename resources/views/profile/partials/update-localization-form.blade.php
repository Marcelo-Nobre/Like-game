<section
    x-data="updateLocalizationData"
>
    @php
        $currentUserTimezone = userMetaData('timezone') ?: config('app.timezone', 'UTC');
    @endphp
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Update localization') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form
        method="post" action="{{ route('updateLocalization') }}"
        class="mt-6 space-y-6"
    >
        @csrf
        @method('put')

        @php
            $time = '2024-03-01T01:10:43+00:00';
            $userDate = userDate($time);
        @endphp

        <div class="flex-row lg:flex items-stretch gap-4">
            <div class="w-full lg:w-1/5 mb-3">
                <div class="hidden">
                    <input type="hidden" name="locale" placeholder="locale" x-model="locale">
                </div>

                <button
                    -data-dropdown-toggle="dropdown-locales"
                    -id="locales-button"
                    class="w-full flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-500 bg-gray-100 border border-gray-300 rounded-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600"
                    type="button"
                    x-on:click="showLocaleOptions = !showLocaleOptions"
                    x-on:click.outside="showLocaleOptions = false"
                >
                    <span class="rounded-full" x-html="getSelectedLocaleFlag('h-3.5 w-3.5 me-2')"></span>
                    <span x-text="selectedLocaleLabel"></span>
                </button>
                <div
                    id="dropdown-locales"
                    class="z-10 w-4/5 lg:w-96 bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700"
                    -style="transform: translate(223px, 1110px);"
                    -style="transform: translateX(7rem) translateY(50rem);"
                    x-bind:class="{
                        hidden: !showLocaleOptions,
                        'block': showLocaleOptions,
                        'translate-y-[40.2rem] lg:translate-y-[39rem]': true,
                        'translate-x-[4.5rem] lg:translate-x-[8rem]': true,
                        'absolute m-0 top-0 right-auto bottom-auto left-0': true,
                    }"
                >
                    <ul
                        class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="locales-button"
                    >
                    @foreach (\Config::get('meta-app.options.allowed_locale') as $locale)
                    @php
                        $locale = fluent($locale);
                    @endphp
                        <li>
                            <button
                                type="button"
                                x-on:click="locale = '{{ $locale?->code }}'"
                                class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                data-localName="{{ $locale?->local_name }}"
                                data-englishName="{{ $locale?->english_name }}"
                                data-code="{{ $locale?->code }}"
                            >
                                <div class="inline-flex items-center">
                                    <span x-html="getFlag('{{ $locale?->code }}', 'h-3.5 w-3.5 me-2 rounded-full')"></span>
                                    {{ $locale?->english_name }} - {{ $locale?->local_name }}
                                    <span class="px-2" x-html="('{{ $locale?->code }}' === currentLocale) ? ' (current)' : ''"></span>
                                </div>
                            </button>
                        </li>
                    @endforeach
                        {{-- <li>
                            <button
                                type="button"
                                x-on:click="locale = 'pt_BR'"
                                class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                            >
                                <div class="inline-flex items-center">
                                    <span x-html="getFlag('pt_BR', 'h-3.5 w-3.5 me-2 rounded-full')"></span>
                                    @lang('Brazil')
                                </div>
                            </button>
                        </li> --}}
                    </ul>
                </div>
            </div>

            <div class="w-full lg:w-2/5 mb-3">
                <label for="timezones" class="sr-only">@lang('Choose a timezone')</label>
                <select
                    id="timezones"
                    class="bg-gray-50 w-64 border border-gray-300 text-gray-900 text-sm rounded-lg border-s-gray-100 dark:border-s-gray-700 border-s-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    x-model="timezone"
                    required
                    name="timezone"

                >
                    <option value="" selected>@lang('Choose a timezone')</option>
                    @foreach (app(\App\Helpers\Timezone::class)->sortByGmtOffset(false)->all() as $timezone)
                        <option
                            value="{{ $timezone?->time_zone }}"
                            data-country-code="{{ $timezone?->country_code }}"
                            data-country-name="{{ $timezone?->country_name }}"
                            data-time-zone="{{ $timezone?->time_zone }}"
                            data-gmt-offset="{{ $timezone?->gmt_offset }}"
                            data-gmt-offset-int="{{ $timezone?->gmt_offset_int }}"
                        >{{ $timezone?->time_zone }} ({{ $timezone?->gmt_offset }}) {{
                            ($currentUserTimezone === $timezone?->time_zone) ? '*' : ''
                        }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'localization-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>

    <script>
        globalThis.DotObject = {
            get: (object, notation, defaultValue = null) => {
                try {
                    let keys = notation.split('.');

                    let result = {
                        ...object
                    };

                    keys.forEach(key => {
                        if (!result) {
                            return defaultValue;
                        }

                        result = result[`${key}`]
                    })

                    return (result === undefined) ? defaultValue : result;
                } catch (err) {
                    return defaultValue;
                }
            }
        };

        globalThis._config = {
            currentLocale: `{{ \Config('app.locale', 'en') }}`,
            currentTimezone: `{{ $currentUserTimezone }}`,
            locale: `{{ \Config('app.locale', 'en') }}`,
            timezone: `{{ $currentUserTimezone ?? '' }}`,
            allowedLocale: @js(\Config('meta-app.options.allowed_locale')),
        };

        function updateLocalizationData() {
            return {
                init() {
                    this.currentLocale = globalThis._config?.currentLocale || null;
                    this.currentTimezone = globalThis._config?.currentTimezone || null;
                    this.locale = globalThis._config?.locale || null;
                    this.timezone = globalThis._config?.timezone || null;
                    this.allowedLocale = globalThis._config?.allowedLocale || null;
                },
                currentLocale: null,
                currentTimezone: null,
                locale: null,
                timezone: null,
                allowedLocale: null,
                showLocaleOptions: false,
                get localeList() {
                    let locales = [];
                    Object.entries(this.allowedLocale || [])?.forEach(item => {
                        let [key, value] = item;
                        locales.push(value);
                    });

                    console.log('locales', JSON.stringify(locales));

                    return locales || [];
                },
                get selectedLocaleLabel() {
                    if (!this.allowedLocale) {
                        return '';
                    }

                    let flagData = DotObject.get(this.allowedLocale, [this.locale, 'local_name'].join('.'));

                    if (!flagData) {
                        return '';
                    }

                    return flagData;
                },
                getSelectedLocaleFlag(classes = '') {
                    if (!this.flags) {
                        return '';
                    }

                    return this.getFlag(this.locale, classes) || '';
                },
                getFlag(flag, classes = '') {
                    let flagText = this.flags[flag] || null;

                    if (!flagText) {
                        return '';
                    }

                    return (`${flagText}`).replace('class="', `class="${classes} `);
                },
                flags: {
                    en: `@component('components.country-flags.usa') @endcomponent`,
                    pt_BR: `@component('components.country-flags.brazil') @endcomponent`,
                }
            }
        }
    </script>
</section>
