<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\RedirectIfAuthenticated as Middleware;
use Illuminate\Http\Request;

class Guest extends Middleware
{
    // this will redirect you to dashboard if authenticated change the return route to your desired route
    protected function redirectTo(Request $request): ?string
    {
        if (! $request->expectsJson()) {
            return route('dashboard');
        }

        return null;
    }
}
