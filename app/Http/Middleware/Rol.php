<?php

namespace App\Http\Middleware;

use Closure;
//use Auth;
//use Illuminate\Support\Facades\Auth;


class Rol
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$rol)     //hacer uno para cada rol
    {
      echo $request->user;
      if ($request->user->rol){
        return Redirect::to('/');
      }
        //return $next($request);
    }
}
