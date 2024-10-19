<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        Log::info('CheckRole middleware executed'); // Log a simple message
        
        // Retrieve role from session
        $role = session('role');

        // Redirect if no role is set
        if (is_null($role) || $role === 'none') {
            return redirect('/access-denied');
        }

        // Allow professors to access all pages
        if ($role === 'professor') {
            return $next($request);
        }

        // Redirect if the student is trying to access the restricted route
        if ($role === 'student' && $request->route()->getName() === 'feedback') {
            return redirect('/restricted'); // Redirect to access denied
        }

        return $next($request); // Allow access for other student routes
    }
}
