<?php

use App\Http\Controllers\ActivateLicenseController;
use App\Http\Controllers\LicenseController;
use App\Mail\Activation;
use App\Models\UnclaimedLicense;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'index');

Route::get('license/create', [LicenseController::class, 'create']);

Route::get('rush/activate', [ActivateLicenseController::class, 'index']);

Route::get('mail', function () {
    return new Activation(UnclaimedLicense::first());
});
