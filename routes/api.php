<?php

use App\Http\Controllers\LicenseController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SatisAuthenticationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('satis/authenticate', SatisAuthenticationController::class)
    ->middleware('auth:license-api');

Route::post('license', [LicenseController::class, 'store'])
    ->name('license.store');
