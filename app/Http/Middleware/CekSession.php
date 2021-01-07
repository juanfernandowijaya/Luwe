<?php

namespace App\Http\Middleware;

use Illuminate\Contracts\Auth\Guard;

use Closure;

class CekSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected $user;
    public function __construct(Guard $user)
    {
        $this->user = $user;
    }
    public function handle($request, Closure $next)
    {

        if (!$request->user()) {
            return response('Unauthorized.', 401);
        }
        return $next($request);
    }
}
