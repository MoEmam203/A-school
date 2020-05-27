<?php

namespace App\Http\Middleware;

//  use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;

class Unauth 
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

        if (Auth()) {
            return redirect()->back();
        }
        
         return $next($request);
    }
}
