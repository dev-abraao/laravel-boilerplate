<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Auth extends Middleware
{
    // this will redirect you to login.view if not authenticated change the return route to your login route
    protected function redirectTo(Request $request): ?string
    {
        if (! $request->expectsJson()) {
            return route('login.view');
        }

        return null;
    }
}
