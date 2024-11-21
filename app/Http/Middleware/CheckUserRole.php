<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use View;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $role = "notLogin"; // Default role
        
        if (auth()->check()) {
            $role = auth()->user()->user_type === "admin" ? "admin" : "user";
        }

        // Share $role variable with all views
        View::share('role', $role);

        return $next($request);
    }
}