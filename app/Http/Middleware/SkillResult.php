<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SkillResult
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
        $skillResult = \DB::table('skills_result')->where('userID',auth()->user()->userID)->first();
        if (auth()->user()->usertype != 'A') {
            if(isset($skillResult->userID) && $skillResult->finished == 'Y'){
                return redirect()->route('user.skillResult');
            }
        }
            
        return $next($request);
    }
}
