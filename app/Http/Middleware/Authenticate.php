<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @param  string|null $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect()->route('home');
            }
        }
//
//        return $next($request);
//    }
//        if (Auth::check()) {
//            dd('bro working');
//            return redirect()->guest('logged_in');
//        }
//        if (Auth::guest()) {
//            return redirect()->guest('logged_in');
//        }
//        return $next($request);
    }
}
