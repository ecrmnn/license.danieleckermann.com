<?php

namespace App\Providers;

use App\Models\License;
use App\Models\User;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Auth::viaRequest('license-key', function (Request $request) {
            $license = License::query()
                ->where('email', $request->getUser())
                ->where('key', $request->getPassword())
                ->first();

            if (!$license) {
                abort(401, 'License key invalid');
            }

            $license->increment('satis_authentication_count');

            return $license;
        });
    }
}
