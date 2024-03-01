@props([
    'name' =>  null,
    'id' =>  null,
    'label' =>  null,
    'autocomplete' =>  null,
])

@php
    $name = str($name)->trim()->toString();
    $id = $id ?: 'input_' . $name;
    $label = $label ?: str($name)->title()->headline()->toString();
@endphp

<div
    class="relative"
    x-data="{
        showPassword: false,
        toggleShowPassword() {
            this.showPassword = !this.showPassword;
            $refs.passInput.setAttribute('type', this.showPassword ? 'text' : 'password');
            $refs.passInput.focus();
        },
    }"
>
    <x-input-label
        :for="$id"
        :value="$label"
        />
    <x-text-input
        :id="$id"
        :name="$name"
        x-ref="passInput"
        type="password"
        x-bind:type="showPassword ? 'text' : 'password'"
        class="mt-1 block w-full"
        :autocomplete="$autocomplete"
    />
    <x-input-error
        :messages="$errors->updatePassword->get($name)"
        class="mt-2"
    />
    <button
        type="button"
        @class([
            'flex items-center',
            'text-white absolute end-2 bottom-2.5 bg-gray-700 hover:bg-gray-800 ring-0 focus:outline-none',
            'font-medium rounded-lg text-sm px-2 py-1 dark:bg-gray-500 dark:hover:bg-gray-600',
            'transition ease-in-out duration-150',
        ])
        x-show="showPassword"
        x-on:click="toggleShowPassword"
    >@svg('fas-eye-slash', 'w-4 h-4')</button>
    <button
        type="button"
        @class([
            'flex items-center',
            'text-white absolute end-2 bottom-2.5 bg-gray-700 hover:bg-gray-800 ring-0 focus:outline-none',
            'font-medium rounded-lg text-sm px-2 py-1 dark:bg-gray-500 dark:hover:bg-gray-600',
            'transition ease-in-out duration-150',
        ])
        x-show="!showPassword"
        x-on:click="toggleShowPassword"
    >@svg('fas-eye', 'w-4 h-4')</button>
</div>
