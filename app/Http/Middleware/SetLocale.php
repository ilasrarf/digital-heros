<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

class SetLocale
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
        //URL::defaults(['locale' => 'en']);
        //if($request->segment(1)=='en'){
        app()->setLocale($request->segment(1));
        return $next($request);
        //}
        // else{
        //     abort(404);
        // }

    }
}
