<?php

namespace App\Rush\Resources;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use LaravelRush\Rush\Resources\Fields\Field;

class License
{
    public static $title = 'domain';

    public function fields(): array
    {
        return [
            Field::id(),

            Field::text('activation_key')
                ->help('Activation key received after purchasing a license')
                ->hidden(function ($request) {
                    return $request->route()->getName() !== 'rush::resource.create';
                })
                ->createRules([
                    'required',
                    Rule::exists('unclaimed_licenses', 'key'),
                ])
                ->updateRules([
                    Rule::exists('licenses', 'activation_key'),
                ]),

            Field::text('domain')
                ->help('Domain for your production site, e.g. www.example.com or example.com')
                ->createRules([
                    'required',
                    Rule::unique('licenses', 'domain'),
                    function ($attribute, $value, $fail) {
                        $strippedValue = str_replace(['https://', 'http://'], '', $value);

                        if (count(explode('.', $strippedValue)) < 2) {
                            $fail('Invalid domain');
                        }
                    },
                ])
                ->updateRules([
                    'required',
                    Rule::unique('licenses', 'domain')->ignore(request()->id),
                    function ($attribute, $value, $fail) {
                        $strippedValue = str_replace(['https://', 'http://'], '', $value);

                        if (count(explode('.', $strippedValue)) < 2) {
                            $fail('Invalid domain');
                        }
                    },
                ]),

            Field::text('license_key')
                ->hidden(function ($request) {
                    return $request->route()->getName() === 'rush::resource.edit'
                        or $request->route()->getName() === 'rush::resource.create';
                })
                ->createRules([
                    'size:0',
                    Rule::in(''),
                ])
                ->updateRules([
                    Rule::exists('licenses', 'license_key'),
                ]),

            Field::number('user_id')
                ->hidden()
                ->value(function ($request) {
                    return $request->user()->id;
                })
                ->rules([
                    Rule::in(request()->user()->id),
                ]),
        ];
    }

    public function indexQuery(Builder $query, Request $request)
    {
        return $query->where('user_id', $request->user()->id);
    }
}
