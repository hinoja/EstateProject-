<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class IsAdminTest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if ($request->user()->role_id > 2) {
            abort(403, 'Vous n\'avez pas le droit d\'accéder  à cette partie de la plateforme,Seuls les Administrateurs y sont autorisés');
        }

        return $next($request);
    }
}
