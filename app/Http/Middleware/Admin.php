<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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
        // check if user is logged in
        if(Auth::check()) {
            // user is logged in and is administrator
            if(Auth::user()->isAdmin()){
                return $next($request);
            }
        }
        return redirect('/')->with('status', 'You are not allowed to access users page');
    }
}
