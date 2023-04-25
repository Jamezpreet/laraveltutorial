<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SimpleMiddleware
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
        $rq = $request->toArray();

        if($rq['age'] == 10)
        {
            return redirect('noaccess');
        }        
        return $next($request);
    }
}
