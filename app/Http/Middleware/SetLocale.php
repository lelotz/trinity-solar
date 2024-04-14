<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $lang=session('language');
        logger("[SET-LOCALE-MIDDLEWARE] Locale from session('language') : " . $lang );

        app()->setLocale($lang);
        return $next($request);
    }
}
