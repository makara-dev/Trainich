<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Illuminate\Http\Request;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(\Session::has('locale')) {
            \App::setLocale(\Session::get('locale'));
            // local default language is english
            // middleware will change language by session
        }
        return $next($request);
    }
}
