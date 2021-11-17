<?php

namespace App\Providers;

use App\Models\License;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
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

            if ($license->isExpired()) {
                abort(401, 'This license is expired');
            }

            $license->increment('satis_authentication_count');

            return $license;
        });
    }
}
