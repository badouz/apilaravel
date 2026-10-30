<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserBrowserAgent
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if the userAgent browser is desktop do next else abort
    $userAgent=$request->userAgent();
    
    if (str_contains($userAgent, "Mobile")) {
        abort(404);
    }else{
       return $next($request);
    }
    }
}
