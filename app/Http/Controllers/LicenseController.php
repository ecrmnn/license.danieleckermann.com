<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Models\License;
use App\Http\Requests\StoreLicenseRequest;

class LicenseController extends Controller
{
    public function store(StoreLicenseRequest $request)
    {
        return License::create(array_merge($request->validated(), [
            'key' => Str::random(32),
        ]));
    }
}
