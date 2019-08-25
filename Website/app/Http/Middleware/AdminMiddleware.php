<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Response;

class AdminMiddleware
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
        if(Auth::user()->id_user_role==1)
        {
            return $next($request);
        }

        else
        {
            return Response::json(['heading' => 'Access Denied, Login First!!', 'message' => 'Access Denied'], 403);
        }
    }
}
