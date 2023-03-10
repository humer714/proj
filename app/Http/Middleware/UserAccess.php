<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAccess
{

    public function handle(Request $request, Closure $next, $userType)
    {

       
        $role = auth()->user()->type;
      
        if ($role == $userType) {
            return $next($request);
        }


        if ($role == 'admin') {
            return new Response(view('admin.index'));
        } else {
            
            return new Response(view('index'));
        }
    }
}
