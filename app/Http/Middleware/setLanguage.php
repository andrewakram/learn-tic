<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class setLanguage
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
        $lang =session()->get('lang');
//        $lang='ar';
//        dd($lang);
        if(isset($lang)){
            session()->put('lang',$lang);
            app()->setLocale($lang);
        }else{
            session()->put('lang','ar');
            app()->setLocale('ar');
        }
        //dd(Session::get('lang'));
        return $next($request);
    }
}
