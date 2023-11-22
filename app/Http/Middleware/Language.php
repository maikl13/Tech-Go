<?php

namespace App\Http\Middleware;

use Closure;

use App\Setting;
use App\Blog;
use App\About;
use App\Config;

class Language
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
        if($request->segment(1)) {
            if($request->segment(1) != "ar" && $request->segment(1) != "en") {
                abort(404);
            }
            app()->setlocale($request->segment(1));
        }else {
            app()->setLocale('ar');   
        }



        $settings = Setting::get();
        $about    = About::first();

        view()->share('settings', $settings);
        view()->share('global_about', $about);
    

        return $next($request);
    }
}
