<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GliukasMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (rand(1,10)<5){
            //Pries uzkrovima
            $response= $next($request);
            //Po uzkrovimo
            return $response;
        }else{
            return new Response("Sistema neveikia");
        }

    }
}
