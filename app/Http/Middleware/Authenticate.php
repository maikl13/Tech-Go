<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Auth;
use Closure;

class Authenticate extends Middleware
{
//
//    public function handle($request, Closure $next, ...$guards)
//    {
////        return "aa";
//        if (Auth::user()) {
//            if (Auth::user()->admin == "1") {
//                return $next($request);
////                return redirect(url('/member/login'));
//            } else {
//                return redirect(url('/login'));
////                return redirect(url('/'));
//            }
//        } else {
////            return $next($request);
//            return redirect(url('/login'));
////            return "cc";
//        }
//    }

//    protected function redirectTo($request)
//    {
//
//        if (! $request->expectsJson()) {
//            return "anas";
////            return route('http://wajbati.ps/member/login');
////            return redirect('http://wajbati.ps/member/login');
//        }
//    }

    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            return route('login');
        }
    }


}
