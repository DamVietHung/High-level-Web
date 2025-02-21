<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckHeaders
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        Log::debug("Custom Middleware was called");
        Log::debug($request->header());
        $ua = $request->header('user-agent');
        if (str_contains($ua,'Mozilla')) {
            return redirect('unauth');
        }
        return $next($request);
    }
}
