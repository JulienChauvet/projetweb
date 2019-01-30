<?php

namespace App\Http\Middleware;

use Closure;

class AuthEtudiant
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
        
        
        if($user::where('id', (auth()->id()))->first()->Role == 'Etudiant'){

            return $next($request);
        }
        
        return back();
    }

}
