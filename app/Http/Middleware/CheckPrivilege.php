<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckPrivilege
{
    public function handle(Request $request, Closure $next, string $privilege)
    {
        $user = auth()->user();

        if (
            !$user ||
            !$user->role ||
            !$user->role->privileges->contains('name', $privilege)
        ) {
            abort(403, 'Unauthorized access.');
        }

        return $next($request);
    }
}