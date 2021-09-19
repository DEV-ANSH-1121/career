<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HrInterview
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
        $skillResult = \DB::table('hr_result')->where('userID',auth()->user()->userID)->first();
        if(!isset($skillResult->userID)){
            return redirect()->route('user.hrInterview');
        }
        return $next($request);
    }
}
