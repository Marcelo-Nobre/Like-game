<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateLocalizationRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        $timezoneList = cache()->rememberForever(
            __METHOD__,
            fn () => app(\App\Helpers\Timezone::class)
                ->sortByGmtOffset(false)
                ->all()
                ->pluck('time_zone')->join(',') . ',' . config('app.timezone')
        );

        return [
            'timezone' => [
                'nullable',
                'string',
                "in:{$timezoneList}"
            ],
            'locale' => [
                'nullable',
                'string',
                'in:' . implode(',', array_keys(config('meta-app.options.allowed_locale'))),
            ],
        ];
    }
}
