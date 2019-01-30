<?php

namespace App\Http\Middleware;

use Closure;

class AuthBDE
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
       public function handle($request, Closure $next)
    {
        $user = new \App\Users;
        
        
        if($user::where('id', (auth()->id()))->first()->Role == 'BDE'){

            return $next($request);
        }
        
        flash("Vous n'avez pas accès à cette page")->warning();
        return back();
    }

}
