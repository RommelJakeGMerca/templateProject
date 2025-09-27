<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check() && auth()->user()->role_id == 2) {
            return $next($request);
        }

        return redirect()->route('home')->with('error', 'Access denied. You dont have access to this page.');
    }
}
