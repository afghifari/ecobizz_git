<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;

class ActivityMonitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = $request->user();
        if ($user) {
            \App\UserLastSeen::check($user);
        }
        return $next($request);
    }
}
