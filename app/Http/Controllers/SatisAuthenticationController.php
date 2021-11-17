<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SatisAuthenticationController extends Controller
{
    public function __invoke(Request $request)
    {
        info($request->header('X-Original-URI', ''));

        return response('valid');
    }

    protected function getRequestedPackage(Request $request): string
    {
        $originalUrl = $request->header('X-Original-URI', '');

        preg_match('#^/dist/(?<package>spatie/[^/]*)/#', $originalUrl, $matches);

        if (! key_exists('package', $matches)) {
            abort(401, 'Missing X-Original-URI header');
        }

        return $matches['package'];
    }
}
