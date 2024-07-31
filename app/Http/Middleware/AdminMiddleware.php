<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (\auth()->check()) {
            if(\auth()->user()->user_type != 0){
                return redirect()->route('admin.login');
            }
            return $next($request);
        }else{
            return redirect()->route('admin.login');
        }
    }
}
