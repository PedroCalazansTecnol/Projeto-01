<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checkout
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    
    {
        $name = $request->input('nome');

        if($name!="RC"){

             return $next($request);
        
        }
        else{

            return response('O nome não pode ser isso !!!',403);
        
        }
        
       
    
    
    
    }


}
