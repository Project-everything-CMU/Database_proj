<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
class CheckAdmin
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
        if($user == "CEO" ||  $name == "EMANUEL")
            return $next($request); 
        else return redirect() -> back() ;

     }
}
