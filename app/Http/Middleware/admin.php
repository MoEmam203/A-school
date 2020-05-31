<?php

namespace App\Http\Middleware;
use Session;
use Closure;
use Illuminate\Support\Facades\Auth;
class admin
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

        if(Auth()->User()->is_admin != 'admin' ){
            Session()->flash('warning', 'You can not access it ');
            return redirect()->back();
        }

        return $next($request);
    }
}
