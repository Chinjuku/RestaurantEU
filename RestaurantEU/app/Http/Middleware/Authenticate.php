<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Closure;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    // public function handle($request, Closure $next, ...$guards)
    // {
    //     // Check if any of the guards allows access
    //     foreach ($guards as $guard) {
    //         if ($this->auth->guard($guard)->check()) {
    //             return $next($request);
    //         }
    //     }

    //     // If none of the guards allow access, return a redirect response
    //     return $this->redirectTo($request);
    // }

    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }
}
