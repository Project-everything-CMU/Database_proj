<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class checkManager
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
        $name = Auth::user() -> name ; 
        $user = Auth::user()  -> jobTitle ; 
        if( $user == "Sale Manager"  ||$name == "EMANUEL" ||$user == "CEO")
            return $next($request); 
        else return redirect() -> back() ;
    }
}
