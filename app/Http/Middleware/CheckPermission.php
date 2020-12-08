<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckPermission
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
        // ATENCAO
        // ALTERAR APP SERVICE PROVIDER
        // ATENCAO
        
        $admin_perm = ['dashboard','usuario','categorias','campanha','profile','pagamentos','parametros'];
        $user_perm = ['dashboard','campanha','profile','pagamentos'];

        $route = explode('.', \Route::currentRouteName());

        if(auth()->user()->role == 2 && in_array($route[0],$user_perm))
        {
            return $next($request);
        } elseif (auth()->user()->role == 1 && in_array($route[0],$admin_perm))
        {
            return $next($request);
        }

        return abort(403);
    }
}
