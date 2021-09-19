<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ProfileUpdate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();
        if(empty($user->country) || empty($user->state) || empty($user->district) || empty($user->pincode) || empty($user->gender) || empty($user->dob) || empty($user->pic)){
            return redirect()->route('user.getProfile');
        }
        return $next($request);
    }
}
