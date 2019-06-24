<?php

namespace App\Http\Middleware;

use Closure;

class AuthPartner
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
        if(current(current($user))->name == 'partner'){
            return $next($request);
        }

        return redirect()->route('partner.showLoginForm')
            ->with(['error' => 'Need to log in as a partner!']);
    }
}
