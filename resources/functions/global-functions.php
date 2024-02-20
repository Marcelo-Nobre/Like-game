<?php

use Illuminate\Support\Fluent;

if (! function_exists('fluent')) {
    /**
     * function fluent
     */
    function fluent(array|object $attributes = []): object
    {
        return new Fluent($attributes);
    }
}
