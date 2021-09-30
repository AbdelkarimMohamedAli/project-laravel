<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class studentResourceCheck
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
  // auth()->check()
     if(Auth::check()){
        return $next($request);
     }else{
   
         return redirect(url('/Student/Login'));

     }     

    
   
   
    }
}
