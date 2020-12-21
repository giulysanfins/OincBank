<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use DB;

class CheckStatus
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
        $user = DB::table('users')->where('email',$request->email)->first();
        if($user != null && $user->status != 1)
        {
            Auth::logout();
            alert()->error('Erro','Usuário Inválido!')->persistent('Fechar');
            return redirect()->route('login');
        }
        return $next($request);
    }
}
