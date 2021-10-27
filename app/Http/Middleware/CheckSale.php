<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
use Illuminate\Http\Request;

class CheckSale
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
        if($user == "Sale" || $user == "Sale Manager"  ||$name = "EMANUEL")
            return $next($request); 
        else return redirect() -> back() ;

    }
}
 