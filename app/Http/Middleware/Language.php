<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;

class Language
{

    public function __construct(Application $app, Request $request) {
        $this->app = $app;
        $this->request = $request;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $locale = 'ar';

        if ($request->is('admin','admin/*')) {
            $locale = session('admin_locale');
        } else {
            $locale = get_lang();
        }

        $this->app->setLocale($locale);

        return $next($request);
    }
}
