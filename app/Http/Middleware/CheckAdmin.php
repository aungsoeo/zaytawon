<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth; 

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    //Edited by HeinHtetAung for admin_user_middleware
    public function handle($request, Closure $next)  
    {
        if(Auth::check() && Auth::user()->role == '1'){
            return $next($request);
        } else {
            return redirect('admin/login');
        }
        return $next($request);
    }
}
