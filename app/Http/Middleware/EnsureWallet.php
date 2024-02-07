<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;



class EnsureWallet
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
        $user = $request->user();

        if ($user && !$user->wallet) {
            // Create a wallet for the user if it doesn't exist
            $user->wallet()->create(['balance' => 0.00]);
        }


        return $next($request);
    }
}
