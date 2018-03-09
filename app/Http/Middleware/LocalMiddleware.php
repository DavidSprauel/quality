<?php

namespace Quality\Http\Middleware;

use Carbon\Carbon;
use Closure;

class LocalMiddleware {
    
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        // Set the language
        if (in_array($request->segment(1), config('app.locale'))) {
            session()->put('lang', $request->segment(1));
        }
        
        // Check if the session has the language
        if (!session()->has('lang')) {
            session()->put('lang', config('app.fallback_locale'));
        }
        
        app()->setLocale(session('lang'));
        Carbon::setLocale(session('lang'));
        
        
        return $next($request);
    }
}
