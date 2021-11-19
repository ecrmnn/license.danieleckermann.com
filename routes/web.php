<?php

use App\Http\Controllers\ActivateLicenseController;
use App\Http\Controllers\LicenseController;
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
