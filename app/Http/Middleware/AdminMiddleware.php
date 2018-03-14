<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
      if ($request->user()->usertype != 1) {
        return redirect()->route('dashboard');
      } else {
        return $next($request);
      }
    }
}
