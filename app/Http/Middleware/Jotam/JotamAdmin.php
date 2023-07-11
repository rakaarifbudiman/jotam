<?php

namespace App\Http\Middleware\Jotam;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class JotamAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() == false) {
            return redirect('/login')->with('warning', 'Please Login First');
        }        

        if (Auth::user() && Auth::user()->email_verified_at==null) {
            return redirect('/profile')->with('error', 'Your email has not been verified...Please Check your email to verified or Please click verification email button to re-send');
        }

        if (Auth::user() && Auth::user()->level>1) {
            return $next($request);
        }

        return redirect('/dashboard')->with('error', 'You are not authorized...');
    }
}
