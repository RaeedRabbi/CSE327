<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Response;
use Request;

class UserMiddleware
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
        $idUserRole = $request->header('user_role');
        $idUser = $request->header('id');
        $token = $request->header('token');


        if($idUserRole != 0 || $idUserRole == null )
        {
            //$next($request);

            return Response::json(['heading' => 'Access Denied, Login First!!', 'message' => $idUserRole], 403);

        }
        if($idUserRole == 0 && $idUserRole != null)
        {
            /*print_r($idUserRole);
            exit;*/
            return $next($request);

        }
    }
}
