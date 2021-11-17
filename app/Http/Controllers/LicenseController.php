<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLicenseRequest;
use App\Models\License;

class LicenseController extends Controller
{
    public function store(StoreLicenseRequest $request)
    {
        return License::create($request->validated());
    }
}
