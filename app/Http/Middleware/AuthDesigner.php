<?php

namespace App\Http\Middleware;

use Closure;

class AuthDesigner
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
        $user = auth()->user()->roles()->get();
        if(current(current($user))->name == 'designer'){
            return $next($request);
        }

        return redirect()->route('designer.showLoginForm')
            ->with(['error' => 'Need to log in as a designer!']);
    }
}
