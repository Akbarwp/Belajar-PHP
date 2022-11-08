<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Middleware Authorization --> lalu masuk ke Kernel.php --> kekuranan: tidak fleksibel
        // Cara ke-3 ada di Provide/AppServicesProvider.php
        // if (auth()->guest() || auth()->user()->username !== 'Admin') {
        //     abort(403);
        // }

        // Middleware & Gate Authorization
        if (!auth()->check() || !auth()->user()->is_admin) {
            abort(403);
        }
        
        return $next($request);
    }
}
