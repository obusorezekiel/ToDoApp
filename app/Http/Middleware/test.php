<?php

namespace App\Http\Middleware;

use Closure;

class test
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
        $ip = $request->ip();
        if($ip == '127.0.0.1'){
           // throw new \Exception("Your IP is correct");
           return redirect('/about');
        }
        return $next($request);
    }
}
