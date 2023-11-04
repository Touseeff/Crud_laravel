<?php

namespace App\Http\Middleware;
use Closure;
use Session;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserMidleware 
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // echo"testing";
        $path  = $request->path();
        // echo $path;
        // if($path == 'login' 
        // || $path == "register"  && session::get('users')){
            // return redirect('/');
        // }
        return $next($request);
    }
}
