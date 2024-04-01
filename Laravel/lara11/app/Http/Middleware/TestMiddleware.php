<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,int $age)
    {
        // dd($age);
        // $a = 100;
        // if($a>15){
        //     return redirect()->route("even");
        // }
        return $next($request);
    }

    
    public function terminate(Request $request, Response $response): void
    {
        info("Gone!");
    }
}
