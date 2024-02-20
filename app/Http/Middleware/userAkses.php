<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class userAkses
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $rules): Response
    {
        if ($rules == 1 && auth()->user()->role == '1') {
            return $next($request);
        } elseif ($rules == 2 && auth()->user()->role == '2') {
            return $next($request);
        }

        return back()->with('error', 'Anda Tidak Memiliki Akses');



        return $next($request);
    }
}
