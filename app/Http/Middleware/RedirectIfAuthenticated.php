<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            $usuario = $request->user();
            if($usuario->hasRole('admin')){
                $redirectPath = 'manager.index';
            }elseif($usuario->hasRole('instructor')){
                $redirectPath = 'web.index';
            }else{
                $redirectPath = 'app.index';
            }

            return redirect()->route($redirectPath);

        }

        return $next($request);
    }
}
