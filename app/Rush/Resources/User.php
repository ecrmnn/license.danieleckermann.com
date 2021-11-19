<?php

namespace App\Rush\Resources;

use LaravelRush\Rush\Resources\Fields\Field;

class User
{
    public function fields(): array
    {
        return [
            Field::id(),
            Field::text('name'),
            Field::email('email'),
            Field::password('password'),
        ];
    }
}
