<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;

class CustomAuth
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
        if(($request->path()=='login' || $request->path()=='register') && Session::get('user')){

            return redirect('/');
        }elseif((!Session::get('user') && $request->path()!= 'login') && !Session::get('user') && $request->path()!= 'register'){
            return redirect('login');
        }
        return $next($request);
    }
}
