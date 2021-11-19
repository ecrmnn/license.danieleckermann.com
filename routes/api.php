<?php

use App\Http\Controllers\Api\UnclaimedLicenseController;
use App\Http\Controllers\SatisAuthenticationController;
use Illuminate\Support\Facades\Route;

Route::post('satis/authenticate', SatisAuthenticationController::class)
    ->middleware('auth:license-api');

Route::post('unclaimed-license', [UnclaimedLicenseController::class, 'store'])
    ->name('api.unclaimedLicense.store');
