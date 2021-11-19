<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreUnclaimedLicenseRequest;
use App\Mail\Activation;
use App\Models\UnclaimedLicense;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UnclaimedLicenseController extends Controller
{
    public function store(StoreUnclaimedLicenseRequest $request)
    {
        $unclaimedLicense = UnclaimedLicense::create(array_merge($request->validated(), [
            'key' => Str::random(32),
        ]));

        Mail::send(new Activation($unclaimedLicense));

        return $unclaimedLicense;
    }
}
