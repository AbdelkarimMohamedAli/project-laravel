<?php

namespace App\Http\Middleware;

use App\tasks;

use Closure;
use Illuminate\Http\Request;
use Carbon\Carbon;

class checkdate
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
      /*  if(Carbon::now()->format('d-m-Y') > tasks::select('todate')->where('id', $request->id)->get()){
            return $next($request);
         }else{
       
             return redirect(url('/Tasks'));
    
         }   
         */

    }
}
