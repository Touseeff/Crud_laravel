<?php

namespace App\Http\Middleware;

use App\Models\Student;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddelware
{
    public $_COOKIEuser;
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // $middleware 
        if (session()->has('user')) //has is equal session id bani hoi ha na
        {
            $request->user = Student::findOrFail(session()->get('user'));
            // $request->user->id;//
            return $next($request);
        }
        abort(401);
    }
}
