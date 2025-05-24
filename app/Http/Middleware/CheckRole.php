<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  mixed ...$roles  (contoh: 'admin', 'customer')
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Cek user login dan role-nya termasuk di list $roles
        if (! $request->user() || ! in_array($request->user()->role, $roles)) {
            abort(403, 'Unauthorized akses.');
        }

        return $next($request);
    }
}
