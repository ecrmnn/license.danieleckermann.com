<?php

namespace App\Rush\Resources;

use App\Models\License;
use LaravelRush\Rush\Resources\Fields\Field;

class Page
{
    public static $title = 'domain';
    public static $model = License::class;

    public function fields(): array
    {
        return [
            Field::id(),
        ];
    }
}
