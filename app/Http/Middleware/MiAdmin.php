<?php

namespace App\Http\Middleware;

use Closure, Auth;
use Illuminate\Http\Request;

class MiAdmin
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
        //Colocar el usuario y el rol asignado en la base de datos
        $rolprueba = 1;
        //if(Auth::user()->role == "SuperAdministrador"):
        if($rolprueba == 1):    
            return $next($request);
        else:
            return redirect('/');
        endif;
    }
}
