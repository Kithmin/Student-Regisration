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
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        if(Auth::check()){

            //Admin role==1
            //user role==0 
                
            if(Auth::user()->role=='1'){
                return($request);
            }else{
                return redirect('/course')->with('message','Login Access to the website!');
            }
            
        } else{
            return redirect('/home')->with('message','Access denid as you are not Admin!');
            
        }
        return $next($request);
    }
}
