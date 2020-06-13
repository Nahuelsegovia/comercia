<?php

namespace App\Http\Middleware;

use Closure;
use App\Registro;
class IsAdmin
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
        $user = new Registro;
        $usuarios = $user->all();
        dd($usuarios);
    }
    
}
 