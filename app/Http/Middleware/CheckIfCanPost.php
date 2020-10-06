<?php

namespace App\Http\Middleware;

use Closure;
use App\products;

class CheckIfCanPost
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
        if (products::firstOrFail()["can_add"]==0) {
            return redirect()->route("toredirect");
        }
        return $next($request);
    }
}
