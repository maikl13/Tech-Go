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
        
        $language = "ar";
        if($request->segment(1)) {
            if($request->segment(1) != "ar" && $request->segment(1) != "en"&& $request->segment(1) != "fr") {
                abort(404);
            }
            $language = $request->segment(1);
        }
        app()->setLocale($language); 


        $settings = Setting::get();
        $about    = About::first();

        view()->share('settings', $settings);
        view()->share('global_about', $about);
        view()->share('language_path', $language === "ar" ? "":$language);
    

    

        return $next($request);
    }
}
