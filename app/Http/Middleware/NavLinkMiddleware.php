<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Destination;
use App\Models\Crew;
use App\Models\Technology;

class NavLinkMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $destination = Destination::first('id');
        $crew = Crew::first('id');
        $technology = Technology::first('id');
        
        $navlink = [
            'destination' => $destination->id,
            'crew' => $crew->id,
            'technology' => $technology->id,
        ];

        view()->share('navlink', $navlink);

        return $next($request);
    }
}
