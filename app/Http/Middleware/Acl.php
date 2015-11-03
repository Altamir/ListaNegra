<?php

namespace ListaNegra\Http\Middleware;

use Closure;
use Auth;

class Acl
{
    
    private $user;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $this->user = Auth::user();
        
        if($this->user->perfil->name == 'admin'){
        return $next($request);
        }
        
        return redirect('/');
    }
}
