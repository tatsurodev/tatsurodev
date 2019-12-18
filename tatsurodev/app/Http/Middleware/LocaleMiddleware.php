<?php

namespace App\Http\Middleware;

use App\Locale;
use Closure;
use Illuminate\Support\Facades\App;

class LocaleMiddleware
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
        // locale sessionがあれば取得
        if (session()->has('locale')) {
            $locale = session()->get('locale');
        } else {
            // locale sessonがなければdefaultのlocale取得
            $locale = Locale::where('is_default', true)->first()->name;
            session()->put('locale', $locale);
        }
        App::setlocale($locale);
        return $next($request);
    }
}
