<?php

namespace App\Rush\Resources;

use App\Models\License;
use Illuminate\Validation\Rule;
use LaravelRush\Rush\Resources\Fields\Field;

class Employee
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
