<?php

namespace App\Http\Middleware;
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRouteAccess
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        $currentRoute = $request->route()->getName();

        // If route has no name, skip check
        if (!$currentRoute) {
            return $next($request);
        }

        // If user not logged in
        if (!$user) {
            return redirect('/login');
        }

        // Get all allowed route names for this user's role
        $allowedRoutes = $user->role->routes->pluck('route_name')->toArray();

        if (!in_array($currentRoute, $allowedRoutes)) {
            abort(403, 'You do not have permission to access this route.');
        }

        return $next($request);
    }
}
