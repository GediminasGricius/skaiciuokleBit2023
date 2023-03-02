<?php

namespace App\Http\Middleware;

use App\Models\Group;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SuaugusiemsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if ($request->user()!==null){
            $age=$request->user()->age;
            if ($age!=null && $age>=18){
                return $next($request);
            }else{
                return redirect()->back();//route('groups.list');
            }
        }else{
            return redirect()->route('login');
        }


    }
}
