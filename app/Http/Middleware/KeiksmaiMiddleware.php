<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class KeiksmaiMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->user()!=null && $request->user()->age>=18){
            return $next($request);
        }else{
            $response=$next($request);
            $content=$response->getContent();
            $content=str_replace('velniais','v******s',$content);
            $content=str_replace('rūpūžė','ž****ė',$content);
            $response->setContent($content);
            return $response;
        }
    }
}
