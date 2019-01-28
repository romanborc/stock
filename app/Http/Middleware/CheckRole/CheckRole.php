<?php

namespace App\Http\Middleware\CheckRole;

use Closure;

class CheckRole extends CheckRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string $roles
     * @return mixed
     */
    public function handle($request, Closure $next, $roles)
    {
        if (!$this->authorization('role', $roles)) {
            return abort(403);
        }

        return $next($request);
    }
}
